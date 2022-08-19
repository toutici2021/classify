<?php

namespace App\Http\Controllers\member;

use App\Advertise;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdRequest;
use App\Http\Requests\EditAdRequest;
use App\Mail\AdsAdminReviewMail;
use App\Mail\NewProductPublished;
use App\Media;
use App\Models\Payment;
use App\ReportAdvertise;
use App\State;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Auth;
use Illuminate\Support\Facades\Mail;
use File;

class AdsController extends Controller
{

    protected $seller_email;
    protected $admin_email;
    protected $subject;
    protected $mail_from_address;
    protected $mail_from_name;

    protected $adsStatus;

    public function index()
    {
        $data['title'] = 'Manage Ads';
        $data['menu'] = 'manage_ads';
        $data['ads'] = Advertise::whereUserId(auth::user()->id)->orderByDesc('id')->paginate(10);
        return view('frontend.member.ads.index', $data);
    }

    public function published()
    {
        $data['title'] = 'Published Ads';
        $data['menu'] = 'published_ads';
        $data['ads'] = Advertise::adsByStatus('1')->paginate(10);
        return view('frontend.member.ads.published', $data);
    }

    public function pending()
    {
        $data['title'] = 'Pending Ads';
        $data['menu'] = 'pending_ads';
        $data['ads'] = Advertise::adsByStatus('0')->paginate(10);
        return view('frontend.member.ads.pending', $data);
    }

    public function archived()
    {
        $data['title'] = 'Archived Ads';
        $data['menu'] = 'archived_ads';
        $data['ads'] = Advertise::adsByStatus('3')->paginate(10);
        return view('frontend.member.ads.archived', $data);
    }


    public function favourite()
    {
        $data['title'] = 'Favourite Ads';
        $data['menu'] = 'favourite_ads';
        $user = Auth::user();
        $data['ads'] = $user->favourite_ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(10);
        return view('frontend.member.ads.favourite', $data);
    }


    public function create()
    {
        $data['title'] = 'Create Ads';
        $data['menu'] = 'create_ad';


        $data['countries'] = Country::all();
        $data['previous_states'] = State::where('country_id', old('country'))->get();
        $data['previous_cities'] = City::where('state_id', old('state'))->get();
        return view('frontend.member.ads.create', $data);
    }

    public function store(AdRequest $request)
    {
        $mark_ads_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $this->getAdsStatus();
        $advertise = new Advertise();
        $advertise->title = $request->ad_title;
        if (Advertise::where('slug', Str::slug($request->ad_title))->count() > 0) {
            $advertise->slug = Str::slug($request->ad_title) . '-' . rand();
        } else {
            $advertise->slug = Str::slug($request->ad_title);
        }
        $advertise->description = $request->ad_description;
        if ($request->category) {
            $subcategory = Category::find($request->category);
            $advertise->category_id = $subcategory->category_id;
        }
        $advertise->sub_category_id = $request->category;
        $advertise->brand_id = $request->brand ? $request->brand : null;
        $advertise->ad_condition = $request->condition;
        $advertise->price = $request->price;
        $advertise->price_plan = $request->price_plan;
        $advertise->payment_status = $request->price_plan == 'premium' ? 'due' : null;
        $advertise->is_negotiable = $request->negotiable == 1 ? '1' : '0';
        $advertise->mark_ad_urgent = $request->mark_ad_urgent == 1 ? '1' : '0';
        $advertise->video_url = $request->video_url ? $request->video_url : null;
        $advertise->country_id = $request->country;
        $advertise->state_id = $request->state;
        $advertise->city_id = $request->city ? $request->city : null;
        $advertise->seller_name = $request->seller_name;
        $advertise->seller_email = $request->seller_email;
        $advertise->seller_phone = $request->seller_phone;
        $advertise->address = $request->address;

        if (get_option('ads_moderation') == 'direct_publish') {

            if ($request->price_plan == 'premium') {
                $number_of_days = get_option('number_of_last_days_premium_ads') + get_option('number_of_expired_date_of_regular_ads');
                $advertise->expire_date = Carbon::now()->addDay($number_of_days)->format("Y-m-d");
            } else {
                $advertise->expire_date = Carbon::now()->addDay(get_option('number_of_expired_date_of_regular_ads'))->format("Y-m-d");
            }

            $advertise->status = '1';
            $advertise->approved_date = Carbon::now()->format("Y-m-d");
            $advertise->move_to_regular = $advertise->price_plan == 'premium' ? Carbon::now()->addDay(get_option('number_of_last_days_premium_ads'))->format('Y-m-d') : null;
        } else {
            $advertise->status = '0';
        }

        $advertise->save();
        // Let's assume ads has been created


        // =============== start sending email ===========

        /*$seller_name = $request->seller_name;
        $this->seller_email = $request->seller_email;
        $this->admin_email = $_ENV['MAIL_FROM_ADDRESS'];
        $this->mail_from_address = $_ENV['MAIL_FROM_ADDRESS'];
        $this->mail_from_name = $_ENV['MAIL_FROM_NAME'];*/


        if (get_option('ads_moderation') == 'direct_publish') {

            if (checkSMTPSetting()) {
                /** send mail to member */
                $this->subject = 'New ad post on ' . get_option('site_title');
                $detail_url = route('rootPath', [$advertise->slug]);
                $body = 'Hello ' . $seller_name . ' <br /> <br> Your ad:    <a href="' . $detail_url . '">' . $advertise->title . '</a> has been published on ' . get_option('site_title') . '<br> <br> Thank Your';
                Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                    $message->subject($this->subject);
                    $message->from($this->mail_from_address, $this->mail_from_name);
                    $message->to($this->seller_email);
                });

                /** send email to admin */
                $this->subject = 'New ad post on ' . get_option('site_title');
                $detail_url = route('rootPath', [$advertise->slug]);
                $body = 'Seller: ' . $seller_name . ' post an ad   <a href="' . $detail_url . '">' . $advertise->title . '</a> <br> <br> Thank Your';
                Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                    $message->subject($this->subject);
                    $message->from($this->mail_from_address, $this->mail_from_name);
                    $message->to($this->admin_email);
                });
            }

        } else {

            if (checkSMTPSetting()) {
                /** send mail to member */
                $mail_data = [
                    'subject' => 'New ads pending for approval',
                    'ads_title' => $advertise->title,
                    'seller_name' => $seller_name

                ];
                $admin_mail_data = [
                    'subject' => 'New ad post on ' . get_option('site_title'),
                    'ads_title' => $advertise->title,
                    'seller_name' => $seller_name

                ];

                Mail::to($this->seller_email)->send(new NewProductPublished($mail_data));


                //Mail::to($this->admin_email)->send(new AdsAdminReviewMail($admin_mail_data));

                /** send email to admin */
                $this->subject = 'New ad post on ' . get_option('site_title');
                $body = 'Seller: ' . $seller_name . ' has posted ' . $advertise->title . '.<br><br> Make review and process accordingly. <br> <br> Thank You.';
                Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                    $message->subject($this->subject);
                    $message->from($this->mail_from_address, $this->mail_from_name);
                    $message->to($this->admin_email);
                });
            }
        }

        /** ========= end send email ==========*/

        $latestAds = Advertise::whereId($advertise->id)->first();

        if ($request->images) {
            $this->manageImages($advertise->id, $request->images, 'store');
        }

        if ($advertise) {
            $ads_price = get_ads_price($latestAds->price_plan);

            if ($mark_ads_urgent) {
                $ads_price = $ads_price + get_option('urgent_ads_price');
            }

            if ($ads_price > 0) {
                $transaction_id = 'tran_' . time() . Str::random(6);

                while (Payment::whereLocalTransactionId($transaction_id)->count() > 0) {
                    $transaction_id = 'reid' . time() . Str::random(5);
                }
                $transaction_id = strtoupper($transaction_id);

                $currency = get_option('currency_sign');

                $payment_data = [
                    'advertise_id' => $advertise->id,
                    'user_id' => Auth::user()->id,
                    'amount' => $ads_price,
                    'payment_method' => $request->payment_method,
                    'status' => 'initial',
                    'currency' => $currency,
                    'local_transaction_id' => $transaction_id
                ];

                $created_payment = Payment::create($payment_data);
                return redirect(route('payment_checkout', $created_payment->local_transaction_id));
            }
        }


        $notification = array(
            'message' => 'Ad has been created',
            'alert-type' => 'success'
        );
        return redirect(route('memberAds'))->with($notification);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Ad';
        $data['menu'] = 'manage_ads';
        $data['brands'] = Brand::orderBy('brand_name', 'asc')->select('id', 'brand_name')->get();
        $data['countries'] = Country::all();
        $data['ad'] = Advertise::find($id);
        return view('frontend.member.ads.edit', $data);
    }

    public function update(EditAdRequest $request, $id)
    {

        $this->getAdsStatus();


        $media_ids = $request->media_id;
        if (null !== $media_ids) {
            foreach ($media_ids as $media_id) {
                $media = Media::find($media_id);
                File::delete($media->media_name);
                $media->delete();
            }
        }


        $advertise = Advertise::find($id);
        $advertise->title = $request->ad_title;
        if (Advertise::where('slug', Str::slug($request->ad_title))->where('id', '!=', $id)->count() > 0) {
            $advertise->slug = Str::slug($request->ad_title) . '-' . rand();
        } else {
            $advertise->slug = Str::slug($request->ad_title);
        }
        $advertise->description = $request->ad_description;
        if ($request->category) {
            $subcategory = Category::find($request->category);
            $advertise->category_id = $subcategory->category_id;
        }
        $advertise->sub_category_id = $request->category;
        $advertise->brand_id = $request->brand ? $request->brand : null;
        $advertise->ad_condition = $request->condition;
        $advertise->price = $request->price;
        $advertise->is_negotiable = $request->negotiable == 1 ? '1' : '0';
        $advertise->video_url = $request->video_url ? $request->video_url : null;
        $advertise->country_id = $request->country;
        $advertise->state_id = $request->state;
        $advertise->city_id = $request->city ? $request->city : null;
        $advertise->seller_name = $request->seller_name;
        $advertise->seller_email = $request->seller_email;
        $advertise->seller_phone = $request->seller_phone;
        $advertise->address = $request->address;

        // Set the ads status for moderation whenever any user updates the ads
        if (get_option('ads_moderation') == 'direct_publish') {
            $advertise->status = '1';
        } else {
            $advertise->status = '0';
        }

        $advertise->save();

        if ($request->images) {
            $this->manageImages($advertise->id, $request->images, 'update');
        }

        $notification = array(
            'message' => 'Ad has been save & updated',
            'alert-type' => 'success'
        );

        return redirect(route('memberAds'))->with($notification);
    }

    public function delete($id)
    {
        $ad = Advertise::whereId($id)->first();
        //Remove the file from storage
        foreach ($ad->media_img as $img) {
            \File::delete('public/uploads/ad/thumbs/' . $img->media_name);
            \File::delete('public/uploads/ad/' . $img->media_name);
            $img->delete();
        }


        $delete = Advertise::whereId($id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "Ad has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete ad"));
    }

    public function removeImage($media_id)
    {
        $media = Media::find($media_id);
        \File::delete('public/uploads/ad/thumbs/' . $media->media_name);
        \File::delete('public/uploads/ad/' . $media->media_name);
        $media->delete();
        return 'success';
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getBrandByCategory($category_id)
    {
        return brandByCategory($category_id);
    }

    /**
     * @param Request $request
     * @return mixed
     */

    public function getStateByCountry($country_id)
    {
        return State::whereCountryId($country_id)->select('id', 'state_name')->get();
    }


    /**
     * @param Request $request
     * @return mixed
     */

    public function getCityByState($state_id)
    {
        return City::whereStateId($state_id)->select('id', 'city_name')->get();
    }

    /**
     * @param Request $request
     * @return mixed
     */

    public function getParentCategoryInfo(Request $request)
    {
        $sub_category = Category::find($request->category_id);
        return Category::find($sub_category->category_id);
    }


    function reportAds(Request $request)
    {
        $ad = Advertise::find($request->advertise_id);
        if ($ad) {
            $data = [
                'advertise_id' => $ad->id,
                'reason' => $request->reason,
                'email' => $request->email,
                'message' => $request->message,
            ];
            ReportAdvertise::create($data);

            /** send email to admin */


            $this->admin_email = $_ENV['MAIL_FROM_ADDRESS'];
            $this->mail_from_address = $_ENV['MAIL_FROM_ADDRESS'];
            $this->mail_from_name = $_ENV['MAIL_FROM_NAME'];
            $this->subject = 'Customer report on ad  ' . $ad->title;
            $body = '<b>Sender email :</b> ' . $request->email . ' <br> <b>Reason: </b>  ' . $request->reason . '.<br> <b>Report details: </b>' . $request->message . '<br> <br> Thank Your';
            Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                $message->subject($this->subject);
                $message->from($this->mail_from_address, $this->mail_from_name);
                $message->to($this->admin_email);
            });

            return ['status' => 1, 'message' => 'You report has been received. Thank you for your efforts'];
        }
        return ['status' => 0, 'message' => 'Something error happen, please try again'];
    }


    private function manageImages($advertise_id, $images, $action_type)
    {
        for ($i = 0; $i < count($images); $i++) {
            $image = $images[$i];
            $imageName = $image->getClientOriginalName();
            $fileName = time() . '-' . $imageName;

            if ($action_type == 'update' && $i == 0 && Media::where('advertise_id', $advertise_id)->count() == 0) {
                $imageThumbs = 'public/uploads/ad/thumbs/' . $fileName;
                Image::make($image)->resize(null, 220, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($imageThumbs);

            } else {
                if ($i == 0) {
                    $imageThumbs = 'public/uploads/ad/thumbs/' . $fileName;
                    Image::make($image)->resize(null, 220, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($imageThumbs);
                }
            }


            $imageUrl = 'public/uploads/ad/' . $fileName;
            Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($imageUrl);

            $media = new Media();
            $media->user_id = auth::user()->id;
            $media->advertise_id = $advertise_id;
            $media->media_name = $fileName;
            $media->type = 'image';
            $media->storage = 'public';
            $media->ref = 'ad';
            $media->save();
        }
    }

    private function getAdsStatus(): void
    {
        if (get_option('ads_moderation') == 'direct_publish') {
            $this->adsStatus = '1';
        } else {
            $this->adsStatus = '0';
        }
    }


}
