<?php

namespace App\Http\Controllers\frontend;

use App\Advertise;
use App\Http\Controllers\Controller;
use App\Meta;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index($path1 = null)
    {
        if ($path1 && User::where('slug', $path1)->where('active_status', '1')->count() > 0) {
            $data['user'] = User::where('slug', $path1)->where('active_status', '1')->first();
            if (get_option('countries_usage') == 'single_country') {
                $country_id = get_option('usage_single_country_id');
                $data['ads'] = Advertise::where('status', '1')->where('user_id', $data['user']->id)->where('country_id', $country_id)->orderByDesc('id')->paginate(get_option('ads_per_page'));
            } else {
                $data['ads'] = Advertise::where('status', '1')->where('user_id', $data['user']->id)->orderByDesc('id')->paginate(get_option('ads_per_page'));
            }
            $meta = Meta::find(10);
            $data['meta'] = array(
                'meta_title' => str_replace('{seller_name}', $data['user']->full_name, $meta->meta_title),
                'meta_description' => str_replace('{seller_name}', $data['user']->full_name, $meta->meta_description),
                'meta_keywords' => str_replace('{seller_name}', $data['user']->full_name, $meta->meta_keywords)
            );
            return view('frontend.store.details', $data);
        } else {
            return response()->view('errors.404', [], 404);
        }
    }
}
