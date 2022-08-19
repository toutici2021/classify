<?php

namespace App\Http\Controllers\frontend;

use App\Advertise;
use App\Http\Controllers\Controller;
use App\Media;
use App\Meta;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($path1 = null)
    {
        if ($path1 == null) {
            $data['meta'] = staticPageMeta(1);
            if (get_option('countries_usage') == 'single_country') {
                $country_id = get_option('usage_single_country_id');
                $data['premium_ads'] = Advertise::where('price_plan', 'premium')->where('status', '1')->where('country_id', $country_id)->orderByDesc('id')->limit(get_option('number_of_premium_ads_in_home'))->get();
                $data['recent_ads'] = Advertise::where('price_plan', 'regular')->where('status', '1')->where('country_id', $country_id)->orderByDesc('id')->limit(get_option('number_of_free_ads_in_home'))->get();

            } else {
                $data['premium_ads'] = Advertise::where('price_plan', 'premium')->where('status', '1')->orderByDesc('id')->limit(get_option('number_of_premium_ads_in_home'))->get();
                $data['recent_ads'] = Advertise::where('price_plan', 'regular')->where('status', '1')->orderByDesc('id')->limit(get_option('number_of_free_ads_in_home'))->get();

            }
            $data['sliders'] = Slider::orderBy('id', 'DESC')->get();
            return view('frontend.index', $data);


        } else {

            if (Advertise::where('slug', $path1)->where('status', '1')->count() > 0) {

                $data['ad'] = Advertise::where('slug', $path1)->where('status', '1')->first();
                $data['enable_discuss'] = get_option('enable_disqus_comment_in_ads_detail');
                $meta = Meta::find(11);
                $data['meta'] = array(
                    'meta_title' => str_replace('{ad_title}', $data['ad']->title, $meta->meta_title),
                    'meta_description' => str_replace('{ad_title}', $data['ad']->title, $meta->meta_description),
                    'meta_keywords' => str_replace('{ad_title}', $data['ad']->title, $meta->meta_keywords)
                );


                /**
                 * Related ads
                 */

                if (get_option('countries_usage') == 'single_country') {
                    $country_id = get_option('usage_single_country_id');

                    $data['related_ads'] = Advertise::active()->whereCategoryId($data['ad']->category_id)->where('country_id', $country_id)->where('id', '!=', $data['ad']->id)->with('category', 'city')->limit(get_option('number_of_related_ads_in_detail_page'))->orderByRaw('RAND()')->get();
                } else {
                    $data['related_ads'] = Advertise::active()->whereCategoryId($data['ad']->category_id)->where('id', '!=', $data['ad']->id)->with('category', 'city')->limit(get_option('number_of_related_ads_in_detail_page'))->orderByRaw('RAND()')->get();
                }

                /**
                 * Increase view count
                 */

                $data['ad']->view = $data['ad']->view + 1;
                $data['ad']->save();
                return view('frontend.ads_listing.details', $data);

            } else {
                return response()->view('errors.404', [], 404);
            }
        }
    }
}
