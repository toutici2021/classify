<?php

namespace App\Http\Controllers\frontend;

use App\Advertise;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Meta;
use App\State;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdsListingController extends Controller
{
    public function index($path1 = null)
    {
        if ($path1 == null)
        {
            if (\request('key') || \request('category') || \request('subcategory') || \request('brand')) {

                $categoryIds = \request('category') == 'all' ? Category::where('category_id', 0)->select('id')->distinct()->get() : [\request('category')];
                $subcategoryIds = \request('subcategory') == 'all' ? Category::where('category_id', '!=', 0)->select('id')->distinct()->get() : [\request('subcategory')];
                $brandIds = \request('brand') == 'all' ? Brand::select('id')->distinct()->get() : [\request('brand')];
                $countryIds = \request('country') == 'all' ? Country::select('id')->distinct()->get() : [\request('country')];
                $stateIds = \request('state') == 'all' ? State::select('id')->distinct()->get() : [\request('state')];
                $cityIds = \request('city') == 'all' ? City::select('id')->distinct()->get() : [\request('city')];
                $ad_condition = \request('condition') ? [\request('condition')] : ['new', 'used'];

                $data['filterSubcategories'] = Category::where('category_id', \request('category'))->where('category_id', '!=', 0)->orderBy('category_name', 'asc')->get();
                $data['filterStates'] = State::where('country_id', \request('country'))->orderBy('state_name', 'asc')->get();
                $data['filterCities'] = City::where('state_id', \request('state'))->orderBy('city_name', 'asc')->get();

                $min_price_ad = Advertise::where('status', '1')->orderBy('price', 'asc')->first();
                $max_price_ad = Advertise::where('status', '1')->orderBy('price', 'desc')->first();


                if (\request('price_min') && \request('price_max'))
                {
                    $price_range = [\request('price_min'), \request('price_max')];

                } elseif (\request('price_min') && \request('price_max') == null)
                {
                    $price_range = [\request('price_min'), $max_price_ad->price];

                } elseif (\request('price_min') == null && \request('price_max'))
                {
                    $price_range = [$min_price_ad->price, \request('price_max')];

                } else {
                    $price_range = [$min_price_ad->price, $max_price_ad->price];
                }

                if (\request('brand') == 'all')
                {
                    if (\request('key'))
                    {
                        $search_key = \request('key');
                        $data['ads'] =  Advertise::where('status', '1')
                            ->where('title', 'like', '%' . $search_key . '%')
                            ->whereIn('category_id', $categoryIds)
                            ->whereIn('sub_category_id', $subcategoryIds)
                            ->whereIn('country_id', $countryIds)
                            ->whereIn('state_id', $stateIds)
                            ->whereIn('city_id', $cityIds)
                            ->whereIn('ad_condition', $ad_condition)
                            ->whereBetween('price', $price_range)
                            ->orderByDesc('id')
                            ->paginate(get_option('ads_per_page'))->withPath('?key='.\request('key').'&category='.\request('category').'&subcategory='.\request('subcategory').'&brand='.\request('brand').'&country='.\request('country').'&state='.\request('state').'&city='.\request('city').'&condition='.\request('condition').'&price_min='.\request('price_min').'&price_max='.\request('price_max'));
                    } else {

                        $data['ads'] =  Advertise::where('status', '1')
                            ->whereIn('category_id', $categoryIds)
                            ->whereIn('sub_category_id', $subcategoryIds)
                            ->whereIn('country_id', $countryIds)
                            ->whereIn('state_id', $stateIds)
                            ->whereIn('city_id', $cityIds)
                            ->whereIn('ad_condition', $ad_condition)
                            ->whereBetween('price', $price_range)
                            ->orderByDesc('id')
                            ->paginate(get_option('ads_per_page'))->withPath('?key='.\request('key').'&category='.\request('category').'&subcategory='.\request('subcategory').'&brand='.\request('brand').'&country='.\request('country').'&state='.\request('state').'&city='.\request('city').'&condition='.\request('condition').'&price_min='.\request('price_min').'&price_max='.\request('price_max'));


                    }



                } else {

                    if (\request('key'))
                    {
                        $search_key = \request('key');

                        $data['ads'] =  Advertise::where('status', '1')
                            ->where('title', 'like', '%' . $search_key . '%')
                            ->whereIn('category_id', $categoryIds)
                            ->whereIn('sub_category_id', $subcategoryIds)
                            ->whereIn('brand_id', $brandIds)
                            ->whereIn('country_id', $countryIds)
                            ->whereIn('state_id', $stateIds)
                            ->whereIn('city_id', $cityIds)
                            ->whereIn('ad_condition', $ad_condition)
                            ->whereBetween('price', $price_range)
                            ->orderByDesc('id')
                            ->paginate(get_option('ads_per_page'))->withPath('?key='.\request('key').'&category='.\request('category').'&subcategory='.\request('subcategory').'&brand='.\request('brand').'&country='.\request('country').'&state='.\request('state').'&city='.\request('city').'&condition='.\request('condition').'&price_min='.\request('price_min').'&price_max='.\request('price_max'));

                    } else {

                        $data['ads'] =  Advertise::where('status', '1')
                            ->whereIn('category_id', $categoryIds)
                            ->whereIn('sub_category_id', $subcategoryIds)
                            ->whereIn('brand_id', $brandIds)
                            ->whereIn('country_id', $countryIds)
                            ->whereIn('state_id', $stateIds)
                            ->whereIn('city_id', $cityIds)
                            ->whereIn('ad_condition', $ad_condition)
                            ->whereBetween('price', $price_range)
                            ->orderByDesc('id')
                            ->paginate(get_option('ads_per_page'))->withPath('?key='.\request('key').'&category='.\request('category').'&subcategory='.\request('subcategory').'&brand='.\request('brand').'&country='.\request('country').'&state='.\request('state').'&city='.\request('city').'&condition='.\request('condition').'&price_min='.\request('price_min').'&price_max='.\request('price_max'));
                    }

                }

            } else {

                $data['filterSubcategories'] = [];
                $data['filterStates'] = [];
                $data['filterCities'] = [];
                $data['ads'] = Advertise::where('status', '1')->orderByDesc('id')->paginate(get_option('ads_per_page'));
            }



            $data['meta'] = staticPageMeta(4);
            $data['title'] = 'All Ads';


            return view('frontend.ads_listing.index', $data);

        } else {

            if (Category::where('category_slug', $path1)->where('category_id',  '!=', 0)->count() > 0)
            {
                $data['category'] = Category::where('category_slug', $path1)->where('category_id', '!=',  0)->first();
                $data['ads'] = Advertise::where('sub_category_id', $data['category']->id)->where('status', '1')->orderByDesc('id')->paginate(get_option('ads_per_page'));

                $meta = Meta::find(6);
                $data['meta'] = array(
                    'meta_title' => str_replace('{category}', $data['category']->category_name, $meta->meta_title),
                    'meta_description' => str_replace('{category}', $data['category']->category_name, $meta->meta_description),
                    'meta_keywords' => str_replace('{category}', $data['category']->category_name, $meta->meta_keywords));

                return view('frontend.ads_listing.ads-by-category', $data);
            }


        }
    }

    public function premium()
    {

        if (get_option('order_by_premium_ads_in_listing') == 'random') {
            $data['ads'] = Advertise::where('price_plan', 'premium')->where('status', '1')->inRandomOrder()->paginate(get_option('ads_per_page'));
        } else {
            $data['ads'] = Advertise::where('price_plan', 'premium')->where('status', '1')->orderByDesc('id')->paginate(get_option('ads_per_page'));
        }

        $data['meta'] = staticPageMeta(4);
        return view('frontend.ads_listing.premium', $data);
    }

    public function regular()
    {
        $data['ads'] = Advertise::where('price_plan', 'regular')->where('status', '1')->orderByDesc('id')->paginate(get_option('ads_per_page'));
        $data['meta'] = staticPageMeta(4);
        return view('frontend.ads_listing.regular', $data);
    }

    public function search()
    {
            if (\request('category')) {

                $categoryIds = \request('category') == 'all' ? Category::where('category_id', 0)->select('id')->distinct()->get() : [\request('category')];

                if (\request('key'))
                {
                    $search_key = \request('key');
                    $data['ads'] =  Advertise::where('status', '1')
                        ->where('title', 'like', '%' . $search_key . '%')
                        ->whereIn('category_id', $categoryIds)
                        ->orderByDesc('id')
                        ->paginate(get_option('ads_per_page'))->withPath('?key='.\request('key').'&category='.\request('category'));
                } else {

                    $data['ads'] =  Advertise::where('status', '1')
                        ->whereIn('category_id', $categoryIds)
                        ->orderByDesc('id')
                        ->paginate(get_option('ads_per_page'))->withPath('?key='.\request('key').'&category='.\request('category'));
                }

                $data['filterSubcategories'] = Category::where('category_id', \request('category'))->where('category_id', '!=', 0)->orderBy('category_name', 'asc')->get();
                $data['meta'] = staticPageMeta(4);
                return view('frontend.ads_listing.search', $data);

            } else {
                return response()->view('errors.404', [], 404);
            }

    }

}
