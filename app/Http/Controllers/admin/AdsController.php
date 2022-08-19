<?php

namespace App\Http\Controllers\admin;

use App\Advertise;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdRequest;
use App\Http\Requests\EditAdRequest;
use App\Mail\NewProductPublishApproved;
use App\Media;
use App\Report_ad;
use App\ReportAdvertise;
use App\Services\DotEnvService;
use App\State;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Storage;
use Exception;
use Image;
use Illuminate\Support\Facades\Mail;
use File;

class AdsController extends Controller
{
    protected $seller_email;
    protected $admin_email;
    protected $subject;
    protected $mail_from_address;
    protected $mail_from_name;

    /**
     * @return Application|Factory|View
     * Return only approved ads
     */

    public function index()
    {
        $data = $this->getAdsByStatus('Approved Ads', 'approved-ads', '1');
        return view('admin.ads.index', $data);

    }

    /**
     * @return Application|Factory|View
     * Return only pending ads
     */

    public function premiumPendingAds()
    {
        $data['title'] = 'Premium Pending  Ads';
        $data['activeMenu'] = 'premium-pending-ads';
        $data['ads'] = Advertise::whereStatus('0')->where('price_plan', 'premium')->where('payment_status', 'paid')->orderBy('id', 'desc')->get();
        return view('admin.ads.premium-pending-ads', $data);

    }

    /**
     * @return Application|Factory|View
     * Return only pending ads
     */

    public function regularPendingAds()
    {
        $data['title'] = 'Regular Pending  Ads';
        $data['activeMenu'] = 'regular-pending-ads';
        $data['ads'] = Advertise::whereStatus('0')->where('price_plan', 'regular')->orderBy('id', 'desc')->get();
        return view('admin.ads.regular-pending-ads', $data);

    }


    /**
     * @return Application|Factory|View
     * Return only blocked ads
     */

    public function blockedAds()
    {

        $data = $this->getAdsByStatus('Blocked Ads', 'blocked-ads', '2');
        return view('admin.ads.blocked', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Create An Ads',
            'activeMenu' => 'create-ads',
            'categories' => Category::where('category_id', 0)->get(),
            'countries' => Country::all(),
            'brands' => Brand::all(),
            'previous_states' => State::where('country_id', old('country'))->get(),
            'previous_cities' => City::where('state_id', old('state'))->get(),
            'ads_images' => Media::whereUserId(Auth::user()->id),
        ];
        return view('admin.ads.create', $data);

    }

    public function store(AdRequest $request)
    {

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
        $advertise->mark_ad_urgent = $request->mark_ad_urgent == 1 ? '1' : '0';
        $advertise->is_negotiable = $request->negotiable == 1 ? '1' : '0';
        $advertise->video_url = $request->video_url ? $request->video_url : null;
        $advertise->country_id = $request->country;
        $advertise->state_id = $request->state;
        $advertise->city_id = $request->city ? $request->city : null;
        $advertise->seller_name = $request->seller_name;
        $advertise->seller_email = $request->seller_email;
        $advertise->seller_phone = $request->seller_phone;
        $advertise->address = $request->address;
        $advertise->user_id = auth::user()->id;

        $advertise->status = '1';
        $advertise->approved_date = Carbon::now()->format("Y-m-d");
        if ($request->price_plan == 'premium') {
            $number_of_days = get_option('number_of_last_days_premium_ads') + get_option('number_of_expired_date_of_regular_ads');
            $advertise->expire_date = Carbon::now()->addDay($number_of_days)->format("Y-m-d");
        } else {
            $advertise->expire_date = Carbon::now()->addDay(get_option('number_of_expired_date_of_regular_ads'))->format("Y-m-d");
        }

        $advertise->move_to_regular = $advertise->price_plan == 'premium' ? Carbon::now()->addDay(get_option('number_of_last_days_premium_ads'))->format('Y-m-d') : null;
        $advertise->save();


        if ($request->images) {
            $this->manageImages($advertise->id, $request->images, 'store');
        }

        $notification = array(
            'message' => 'Ad has been created',
            'alert-type' => 'success'
        );
        return redirect(route('approved_ads'))->with($notification);
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Ads',
            'activeMenu' => 'all-ads',
            'categories' => Category::where('category_id', 0)->get(),
            'countries' => Country::all(),
            'brands' => Brand::all(),
            'ad' => Advertise::find($id),
        ];
        return view('admin.ads.edit', $data);

    }


    public function update(EditAdRequest $request, $id)
    {

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
        $advertise->user_id = $request->user_id ? $request->user_id : auth::user()->id; // Don't put the logged in user id if the ads is submitted by a user
        $advertise->save();

        if ($request->images) {
            $this->manageImages($advertise->id, $request->images, 'update');
        }


        $notification = array(
            'message' => 'Ad has been save & updated',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        $ad = Advertise::whereId($id)->first();
        //Remove the file from storage

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
        \File::delete($media->media_name);
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


    public function adStatusChange($slug, $value)
    {
        $ad = Advertise::whereSlug($slug)->first();
        if ($ad) {
            ad_status_change($ad->id, $value);
            if ($value == 1) {
                $detail_url = route('rootPath', [$ad->slug]);
                $mail_data = [
                    'subject' => 'You ads has been approved',
                    'ads_title' => $ad->title,
                    'ads_url' => $detail_url,
                    'seller_name' => $ad->seller_name
                ];

                /**
                 * First check SMTP is properly configured
                 */

                if (checkSMTPSetting()) {
                    Mail::to($ad->seller_email)->send(new NewProductPublishApproved($mail_data));
                }
                return responseMessage(1, 'success', 'Ads has been approved');
            } elseif ($value == 2) {
                return responseMessage(0, 'error', 'Ads has been blocked');
            } elseif ($value == 3) {
                return responseMessage(0, 'info', 'Ads has been archived');
            }
        }
        return responseMessage(4, 'error', 'Something wrong happen. Unable to update ads status');;
    }


    /**
     * @return Application|Factory|View
     * Display list of reported ads in admin end
     */

    function allReportedAds()
    {
        $data['title'] = 'Reported Ads';
        $data['activeMenu'] = 'reported-ads';
        $data['reported_ads'] = ReportAdvertise::orderBy('id', 'desc')->with('advertise')->get();
        return view('admin.ads.reported-ads', $data);

    }


    /**
     * @param Request $request
     * @return array
     * @throws Exception
     */

    function deleteAdsReport($id)
    {
        ReportAdvertise::find($id)->delete();
        return ['success' => 1, 'message' => 'Report has been deleted fo this ads'];
    }

    /**
     * @param $title
     * @param $activeMenu
     * @param string $type
     * @return array
     */
    private function getAdsByStatus($title, $activeMenu, $type = '0'): array
    {
        return [
            'title' => $title,
            'activeMenu' => $activeMenu,
            'ads' => Advertise::whereStatus($type)->orderBy('id', 'desc')->get()
        ];
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

}
