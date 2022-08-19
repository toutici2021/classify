<?php

// Get list of registered routes and send them as JavaScript Object

use App\Models\Inquiry;
use App\Services\DotEnvService;
use Carbon\Carbon;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Http\Request;
use App\Option;
use App\Advertise;
use App\User;


if (!function_exists('brandByCategory')) {
    function brandByCategory($id): object
    {
        $brand_id_for_primary_category = [];
        $brand_id_for_secondary_category = [];

        $category = \App\Category::find($id);
        $primary_category_brands = \App\Models\Category_brand::where('category_id', $category->category_id)->get();

        foreach ($primary_category_brands as $key => $primary_category_brand) {
            $brand_id_for_primary_category[$key] = $primary_category_brand->brand_id;
        }

        $secondary_category_brands = \App\Models\Category_brand::where('category_id', $id)->get();
        foreach ($secondary_category_brands as $key => $secondary_category_brand) {
            $brand_id_for_secondary_category[$key] = $secondary_category_brand->brand_id;
        }
        $brandIds = array_unique(array_merge($brand_id_for_primary_category, $brand_id_for_secondary_category));
        return \App\Brand::whereIn('id', $brandIds)->get();
    }
}

if (!function_exists('staticPageMeta')) {
    function staticPageMeta($id): array
    {
        $meta = \App\Meta::find($id);
        return array(
            'meta_title' => $meta->meta_title,
            'meta_description' => $meta->meta_description,
            'meta_keywords' => $meta->meta_keywords
        );
    }
}

if (!function_exists('pageJsonData')) {
    function pageJsonData()
    {
        $routeLists = \Illuminate\Support\Facades\Route::getRoutes();

        $data = [
            'home_url' => env('APP_URL'),
        ];

        $routes = [];
        foreach ($routeLists as $route) {
            $routes[$route->getName()] = $data['home_url'] . '/' . $route->uri;
        }
        $data['routes'] = $routes;
        return json_encode($data);
    }
}


if (!function_exists('single_country_for_ad_filter')) {
    function single_country_for_ad_filter()
    {
        return \App\Country::find(get_option('usage_single_country_id'));
    }
}


if (!function_exists('get_fa_icons')) {
    function get_fa_icons()
    {
        $pattern = '/\.(fa-(?:\w+(?:-)?)+):before\s+{\s*content:\s*"\\\\(.+)";\s+}/';
        $subject = file_get_contents(('public/frontend/css/icon/font-awesome/css/font-awesome.css'));
        preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $icons[$match[1]] = $match[2];
        }
        ksort($icons);
        return $icons;
    }
}


if (!function_exists('category_colors')) {
    function category_colors(): array
    {
        return [
            'blue' => '#007bff',
            'indigo' => '#6610f2',
            'purple' => '#6f42c1',
            'pink' => '#e83e8c',
            'red' => '#dc3545',
            'orange' => '#fd7e14',
            'yellow' => '#ffc107',
            'green' => '#28a745',
            'teal' => '#20c997',
            'cyan' => '#17a2b8',
            'gray-dark' => '#343a40',
            'primary' => '#007bff',
            'secondary' => '#6c757d',
            'success' => '#28a745',
            'info' => '#17a2b8',
            'warning' => '#ffc107',
            'danger' => '#dc3545',
            'dark' => '#343a40',
        ];
    }

}


if (!function_exists('responseMessage')) {

    /**
     * @param $response_code
     * @param $alertType
     * @param $message
     * @return array
     */

    function responseMessage($response_code, $alertType, $message): array
    {
        return array(
            'success' => $response_code,
            'message' => $message,
            'alert-type' => $alertType
        );
    }
}


if (!function_exists('get_option')) {

    /**
     * @param string $option_key
     * @param bool $default
     * @return bool|mixed
     */
    function get_option($option_key = '', $default = false)
    {
        $options = config('options');
        if (isset($options[$option_key])) {
            return $options[$option_key];
        }
        return $default;
    }
}


if (!function_exists('qlab_classify_currencies')) {
    function qlab_classify_currencies(): array
    {
        return array(
            'AED' => 'United Arab Emirates dirham',
            'AFN' => 'Afghan afghani',
            'ALL' => 'Albanian lek',
            'AMD' => 'Armenian dram',
            'ANG' => 'Netherlands Antillean guilder',
            'AOA' => 'Angolan kwanza',
            'ARS' => 'Argentine peso',
            'AUD' => 'Australian dollar',
            'AWG' => 'Aruban florin',
            'AZN' => 'Azerbaijani manat',
            'BAM' => 'Bosnia and Herzegovina convertible mark',
            'BBD' => 'Barbadian dollar',
            'BDT' => 'Bangladeshi taka',
            'BGN' => 'Bulgarian lev',
            'BHD' => 'Bahraini dinar',
            'BIF' => 'Burundian franc',
            'BMD' => 'Bermudian dollar',
            'BND' => 'Brunei dollar',
            'BOB' => 'Bolivian boliviano',
            'BRL' => 'Brazilian real',
            'BSD' => 'Bahamian dollar',
            'BTC' => 'Bitcoin',
            'BTN' => 'Bhutanese ngultrum',
            'BWP' => 'Botswana pula',
            'BYR' => 'Belarusian ruble',
            'BZD' => 'Belize dollar',
            'CAD' => 'Canadian dollar',
            'CDF' => 'Congolese franc',
            'CHF' => 'Swiss franc',
            'CLP' => 'Chilean peso',
            'CNY' => 'Chinese yuan',
            'COP' => 'Colombian peso',
            'CRC' => 'Costa Rican col&oacute;n',
            'CUC' => 'Cuban convertible peso',
            'CUP' => 'Cuban peso',
            'CVE' => 'Cape Verdean escudo',
            'CZK' => 'Czech koruna',
            'DJF' => 'Djiboutian franc',
            'DKK' => 'Danish krone',
            'DOP' => 'Dominican peso',
            'DZD' => 'Algerian dinar',
            'EGP' => 'Egyptian pound',
            'ERN' => 'Eritrean nakfa',
            'ETB' => 'Ethiopian birr',
            'EUR' => 'Euro',
            'FJD' => 'Fijian dollar',
            'FKP' => 'Falkland Islands pound',
            'GBP' => 'Pound sterling',
            'GEL' => 'Georgian lari',
            'GGP' => 'Guernsey pound',
            'GHS' => 'Ghana cedi',
            'GIP' => 'Gibraltar pound',
            'GMD' => 'Gambian dalasi',
            'GNF' => 'Guinean franc',
            'GTQ' => 'Guatemalan quetzal',
            'GYD' => 'Guyanese dollar',
            'HKD' => 'Hong Kong dollar',
            'HNL' => 'Honduran lempira',
            'HRK' => 'Croatian kuna',
            'HTG' => 'Haitian gourde',
            'HUF' => 'Hungarian forint',
            'IDR' => 'Indonesian rupiah',
            'ILS' => 'Israeli new shekel',
            'IMP' => 'Manx pound',
            'INR' => 'Indian rupee',
            'IQD' => 'Iraqi dinar',
            'IRR' => 'Iranian rial',
            'ISK' => 'Icelandic kr&oacute;na',
            'JEP' => 'Jersey pound',
            'JMD' => 'Jamaican dollar',
            'JOD' => 'Jordanian dinar',
            'JPY' => 'Japanese yen',
            'KES' => 'Kenyan shilling',
            'KGS' => 'Kyrgyzstani som',
            'KHR' => 'Cambodian riel',
            'KMF' => 'Comorian franc',
            'KPW' => 'North Korean won',
            'KRW' => 'South Korean won',
            'KWD' => 'Kuwaiti dinar',
            'KYD' => 'Cayman Islands dollar',
            'KZT' => 'Kazakhstani tenge',
            'LAK' => 'Lao kip',
            'LBP' => 'Lebanese pound',
            'LKR' => 'Sri Lankan rupee',
            'LRD' => 'Liberian dollar',
            'LSL' => 'Lesotho loti',
            'LYD' => 'Libyan dinar',
            'MAD' => 'Moroccan dirham',
            'MDL' => 'Moldovan leu',
            'MGA' => 'Malagasy ariary',
            'MKD' => 'Macedonian denar',
            'MMK' => 'Burmese kyat',
            'MNT' => 'Mongolian t&ouml;gr&ouml;g',
            'MOP' => 'Macanese pataca',
            'MRO' => 'Mauritanian ouguiya',
            'MUR' => 'Mauritian rupee',
            'MVR' => 'Maldivian rufiyaa',
            'MWK' => 'Malawian kwacha',
            'MXN' => 'Mexican peso',
            'MYR' => 'Malaysian ringgit',
            'MZN' => 'Mozambican metical',
            'NAD' => 'Namibian dollar',
            'NGN' => 'Nigerian naira',
            'NIO' => 'Nicaraguan c&oacute;rdoba',
            'NOK' => 'Norwegian krone',
            'NPR' => 'Nepalese rupee',
            'NZD' => 'New Zealand dollar',
            'OMR' => 'Omani rial',
            'PAB' => 'Panamanian balboa',
            'PEN' => 'Peruvian nuevo sol',
            'PGK' => 'Papua New Guinean kina',
            'PHP' => 'Philippine peso',
            'PKR' => 'Pakistani rupee',
            'PLN' => 'Polish z&#x142;oty',
            'PRB' => 'Transnistrian ruble',
            'PYG' => 'Paraguayan guaran&iacute;',
            'QAR' => 'Qatari riyal',
            'RON' => 'Romanian leu',
            'RSD' => 'Serbian dinar',
            'RUB' => 'Russian ruble',
            'RWF' => 'Rwandan franc',
            'SAR' => 'Saudi riyal',
            'SBD' => 'Solomon Islands dollar',
            'SCR' => 'Seychellois rupee',
            'SDG' => 'Sudanese pound',
            'SEK' => 'Swedish krona',
            'SGD' => 'Singapore dollar',
            'SHP' => 'Saint Helena pound',
            'SLL' => 'Sierra Leonean leone',
            'SOS' => 'Somali shilling',
            'SRD' => 'Surinamese dollar',
            'SSP' => 'South Sudanese pound',
            'STD' => 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe dobra',
            'SYP' => 'Syrian pound',
            'SZL' => 'Swazi lilangeni',
            'THB' => 'Thai baht',
            'TJS' => 'Tajikistani somoni',
            'TMT' => 'Turkmenistan manat',
            'TND' => 'Tunisian dinar',
            'TOP' => 'Tongan pa&#x2bb;anga',
            'TRY' => 'Turkish lira',
            'TTD' => 'Trinidad and Tobago dollar',
            'TWD' => 'New Taiwan dollar',
            'TZS' => 'Tanzanian shilling',
            'UAH' => 'Ukrainian hryvnia',
            'UGX' => 'Ugandan shilling',
            'USD' => 'United States dollar',
            'UYU' => 'Uruguayan peso',
            'UZS' => 'Uzbekistani som',
            'VEF' => 'Venezuelan bol&iacute;var',
            'VND' => 'Vietnamese &#x111;&#x1ed3;ng',
            'VUV' => 'Vanuatu vatu',
            'WST' => 'Samoan t&#x101;l&#x101;',
            'XAF' => 'Central African CFA franc',
            'XCD' => 'East Caribbean dollar',
            'XOF' => 'West African CFA franc',
            'XPF' => 'CFP franc',
            'YER' => 'Yemeni rial',
            'ZAR' => 'South African rand',
            'ZMW' => 'Zambian kwacha',
        );

    }
}


if (!function_exists('get_current_storage')) {
    /**
     * @return Filesystem
     */
    function get_current_storage(): Filesystem
    {
        return Storage::disk(get_option('default_storage'));
    }
}


if (!function_exists('category_image_url')) {

    /**
     * @param string $image
     * @return string
     * Pass the eloquent model to the function basically.
     */
    function category_image_url($image = '')
    {
        $image_url = '';
        if ($image) {
            if ($image->storage == 'public') {
                $image_url = asset('storage/app/public/uploads/categories/' . $image->media_name);
            }
        } elseif ($image->storage == 's3') {
            $image_url = Storage::disk('s3')->url('uploads/categories' . $image->media_name);
        }

        return $image_url;


    }
}


if (!function_exists('unique_slug')) {
    /**
     * @param string $title
     * @param string $model
     * @return string
     */
    function unique_slug($title = '', $model = 'Advertise')
    {
        $slug = Str::slug($title);
        $nSlug = $slug;
        $i = 0;
        $model = str_replace(' ', '', "\App\ " . $model);
        while ($model::whereSlug($nSlug)->count() > 0) {
            $i++;
            $nSlug = $slug . '-' . $i;
        }
        if ($i > 0) {
            $newSlug = substr($nSlug, 0, strlen($slug)) . '-' . $i;
        } else {
            $newSlug = $slug;
        }
        return $newSlug;
    }
}


if (!function_exists('media_url')) {

    /**
     * @param string $img
     * @param bool $full_size
     * @return string
     */
    function media_url($img = '', $full_size = false)
    {
        $url_path = '';

        if ($img) {
            if ($img->type == 'image') {
                if ($img->storage == 'public') {
                    if ($full_size) {
                        $url_path = asset('storage/app/public/uploads/images/' . $img->media_name);
                    } else {
                        $url_path = asset('storage/app/public/uploads/images/thumbs/' . $img->media_name);
                    }
                } elseif ($img->storage == 's3') {
                    if ($full_size) {
                        $url_path = Storage::disk('s3')->url('uploads/images/' . $img->media_name);
                    } else {
                        $url_path = Storage::disk('s3')->url('uploads/images/thumbs/' . $img->media_name);
                    }

                }
            }
        } else {
            $url_path = asset('storage/app/public/uploads/placeholder.png');
        }

        return $url_path;
    }
}


if (!function_exists('initiateDatatable')) {
    /**
     * @param Request $request
     * @return array
     */
    function initiateDatatable(Request $request): array
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value
        return array($draw, $start, $rowperpage, $columnName, $columnSortOrder, $searchValue);
    }
}


if (!function_exists('logo_url')) {

    /**
     * @return bool|string
     */

    function logo_url()
    {
        $url_path = '';
        $img = get_option('logo');
        $source = get_option('logo_storage');
        $exists = Storage::disk($source)->exists('uploads/logo/' . $img);
        if (!$exists)
            return false;

        if ($source == 'public') {
            $url_path = asset('storage/app/public/uploads/logo/' . $img);
        } elseif ($source == 's3') {
            $url_path = Storage::disk('s3')->url('uploads/logo/' . $img);
        }
        return $url_path;
    }
}


if (!function_exists('update_option')) {

    /**
     * @param $key
     * @param $value
     * @return bool
     */
    function update_option($key, $value)
    {
        $option = Option::firstOrCreate(['option_key' => $key]);
        $option->option_value = $value;
        return $option->save();
    }

    function ad_thumb($media_name)
    {
        return 'public/uploads/ad/thumbs/' . $media_name;
    }
}


function ad_status_change($ad_id = 0, $status = '1')
{
    if ($ad_id > 0) {
        $ad = Advertise::find($ad_id);

        if ($ad) {
            $previous_status = $ad->status;
            $ad->status = $status;
            if ($status == 1) {
                $ad->status = '1';
                $ad->approved_date = Carbon::now()->format("Y-m-d");
                if ($ad->price_plan == 'premium') {
                    $number_of_days = get_option('number_of_last_days_premium_ads') + get_option('number_of_expired_date_of_regular_ads');
                    $ad->expire_date = Carbon::now()->addDay($number_of_days)->format("Y-m-d");
                } else {
                    $ad->expire_date = Carbon::now()->addDay(get_option('number_of_expired_date_of_regular_ads'))->format("Y-m-d");
                }
                $ad->move_to_regular = $ad->price_plan == 'premium' ? Carbon::now()->addDay(get_option('number_of_last_days_premium_ads'))->format('Y-m-d') : null;
            }
            $ad->save();
        }
    }

    return false;
}


function checkSMTPSetting()
{
    $dotEnvService = new DotEnvService();
    $mail_driver = $dotEnvService->getEnvironmentalValue('MAIL_DRIVER');
    $mail_host = $dotEnvService->getEnvironmentalValue('MAIL_HOST');
    $mail_port = $dotEnvService->getEnvironmentalValue('MAIL_PORT');
    $mail_username = $dotEnvService->getEnvironmentalValue('MAIL_USERNAME');
    $mail_password = $dotEnvService->getEnvironmentalValue('MAIL_PASSWORD');
    $mail_encryption = $dotEnvService->getEnvironmentalValue('MAIL_ENCRYPTION');
    $mail_form_address = $dotEnvService->getEnvironmentalValue('MAIL_FROM_ADDRESS');
    $mail_form_name = $dotEnvService->getEnvironmentalValue('MAIL_FROM_NAME');

    if ($mail_driver == null &&
        $mail_host == null &&
        $mail_port == null &&
        $mail_username == null &&
        $mail_password == null &&
        $mail_encryption == null &&
        $mail_form_address == null &&
        $mail_form_name == null) {
        return false;
    } else {
        return true;
    }
}


if (!function_exists('get_ads_price')) {


    /**
     * @param string $plan
     * @return bool|int|mixed
     */
    function get_ads_price($plan = 'regular')
    {
        $price = 0;

        if ($plan == 'regular') {
            if (get_option('ads_price_plan') == 'all_ads_paid') {
                $price = get_option('regular_ads_price');
            }
        } elseif ($plan == 'premium') {
            if (get_option('ads_price_plan') != 'all_ads_free') {
                $price = get_option('premium_ads_price');
            }
        }

        return $price;
    }
}


if (!function_exists('get_stripe_key')) {

    /**
     * @param string $type
     * @return bool|mixed|string
     */

    function get_stripe_key($type = 'publishable')
    {
        $stripe_key = '';

        if ($type == 'publishable') {
            if (get_option('stripe_test_mode') == 1) {
                $stripe_key = get_option('stripe_test_publishable_key');
            } else {
                $stripe_key = get_option('stripe_live_publishable_key');
            }
        } elseif ($type == 'secret') {
            if (get_option('stripe_test_mode') == 1) {
                $stripe_key = get_option('stripe_test_secret_key');
            } else {
                $stripe_key = get_option('stripe_live_secret_key');
            }
        }

        return $stripe_key;
    }
}

function numberOfInboxMessage(): int
{
    $inquiriesForUserToIds = Inquiry::where('user_to', Auth::user()->id)->select('id')->get();
    $userToIds = [];
    foreach ($inquiriesForUserToIds as $inquiriesForUserToId) {
        $userToIds[] = $inquiriesForUserToId->id;
    }
    $inquiriesForReplies = Inquiry::where('user_from', Auth::user()->id)->where('has_reply', 'yes')->select('id')->get();
    $idsForReply = [];

    foreach ($inquiriesForReplies as $inquiriesForReply) {
        $idsForReply[] = $inquiriesForReply->id;
    }

    $inquiriesIds = array_unique(Arr::collapse([$userToIds, $idsForReply]));
    return Inquiry::whereIn('id', $inquiriesIds)->where('unseen_user', Auth::user()->id)->where('read_status', 'no')->count();
}


if (!function_exists('get_popular_categories')) {
    function get_popular_categories()
    {
        $popular_ads = Advertise::orderBy('view', 'DESC')->get();


        $data = [];
        $new = [];


        foreach ($popular_ads as $ads) {
            if ($ads->category) {
                $data[] = $ads->category->category_name . '+' . $ads->category->category_slug;
            }
        }


        for ($i = 0; $i < count($data); $i++) {
            if (!in_array($data[$i], $new)) {
                $new[] = $data[$i];
            }
        }
        return $new;


    }
}


if (!function_exists('get_ads_description')) {
    function get_ads_description($id)
    {
        echo Advertise::where('id', $id)->value('description');
    }
}





