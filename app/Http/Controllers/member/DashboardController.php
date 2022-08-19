<?php

namespace App\Http\Controllers\member;

use App\Advertise;
use App\Favourite;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberPersonalDetailsRequest;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['menu'] = 'dashboard';
        $data['number_of_published_ads'] = Advertise::adsByStatus('1')->count();
        $data['number_of_pending_ads'] = Advertise::adsByStatus('0')->count();
        $data['number_of_archive_ads'] = Advertise::adsByStatus('3')->count();
        $data['number_of_paid_ads'] = Advertise::where('user_id', auth::user()->id)->where('payment_status','paid')->count();
        $data['inquiries'] = Inquiry::where('user_to', Auth::user()->id)->orderByDesc('id')->limit(5)->get();
        return view( 'frontend.member.dashboard', $data);
    }

    public function savePersonalDetails(MemberPersonalDetailsRequest $request)
    {
        $user = auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();

        $notification = array(
            'message' => 'Profile updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function saveAdAsFavorite($slug)
    {
        if (!Auth::check())
            return ['status' => 0, 'message' => trans('app.error_msg'), 'redirect_url' => route('login')];
        $user = Auth::user();
        $ad = Advertise::whereSlug($slug)->first();
        if ($ad) {
            $get_previous_favorite = Favourite::whereUserId($user->id)->whereAdvertiseId($ad->id)->first();
            if ($get_previous_favorite) {

                $get_previous_favorite->delete();
                return ['status' => 1, 'action' => 'removed', 'message' => '<i class="fa fa-heart-o"></i> ' . 'Save as favorite'];
            } else {
                Favourite::create(['user_id' => $user->id, 'advertise_id' => $ad->id]);
                return ['status' => 1, 'action' => 'added', 'message' => '<i class="fa fa-heart"></i> ' . 'Saved for favorite'];
            }
        }
        return ['status' => 0, 'message' => 'Something went wrong, please try again'];
    }

}
