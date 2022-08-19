<?php

namespace App\Http\Controllers\frontend;

use App\Advertise;
use App\Category;
use App\Http\Controllers\Controller;
use App\Meta;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($path1 = null)
    {
        if ($path1 == null) {
            $data['meta'] = staticPageMeta(1);
            $data['title'] = 'Ads Categories';
            return view('frontend.category.index', $data);
        } else {
            if (Category::where('category_slug', $path1)->where('category_id', 0)->count() > 0) {
                if (get_option('countries_usage') == 'single_country') {
                    $country_id = get_option('usage_single_country_id');

                    $data['category'] = Category::where('category_slug', $path1)->where('category_id', 0)->first();
                    $data['ads'] = Advertise::where('category_id', $data['category']->id)->where('country_id', $country_id)->where('status', '1')->orderByDesc('id')->paginate(get_option('ads_per_page'));
                } else {
                    $data['category'] = Category::where('category_slug', $path1)->where('category_id', 0)->first();
                    $data['ads'] = Advertise::where('category_id', $data['category']->id)->where('status', '1')->orderByDesc('id')->paginate(get_option('ads_per_page'));

                }
                $meta = Meta::find(5);
                $data['meta'] = array(
                    'meta_title' => str_replace('{category}', $data['category']->category_name, $meta->meta_title),
                    'meta_description' => str_replace('{category}', $data['category']->category_name, $meta->meta_description),
                    'meta_keywords' => str_replace('{category}', $data['category']->category_name, $meta->meta_keywords));

                return view('frontend.category.ads-by-category', $data);
            } else {
                return response()->view('errors.404', [], 404);
            }
        }

    }
}
