<?php


namespace App\Http\View\Composers;


use App\Advertise;
use App\Brand;
use App\Category;
use App\Country;
use App\Post;
use App\ReportAdvertise;
use App\User;
use Illuminate\View\View;

class ViewComposer
{


    /**
     * @param View $view
     * define as many as global variables here to use throughout the application vai AppServiceProviderClass
     */

    public function compose(View $view)
    {
        $view->with('countries', Country::orderBy('country_name', 'asc')->get());
        $view->with('categories', Category::where('category_id', 0)->orderBy('category_name', 'asc')->get());
        $view->with('subcategories', Category::where('category_id', '!=', 0)->orderBy('category_name', 'asc')->get());
        $view->with('totalPublishedAds', Advertise::whereStatus('1')->orderBy('id', 'desc')->withoutGlobalScopes()->count());
        $view->with('totalPendingForApprovalAds', Advertise::whereStatus('0')->withoutGlobalScopes()->orderBy('id', 'desc')->count());
        $view->with('totalPremiumPendingAds', Advertise::whereStatus('0')->withoutGlobalScopes()->where('price_plan', 'premium')->where('payment_status', 'paid')->count());
        $view->with('totalRegularPendingAds', Advertise::whereStatus('0')->withoutGlobalScopes()->where('price_plan', 'regular')->count());
        $view->with('totalBlockedAds', Advertise::whereStatus('2')->withoutGlobalScopes()->orderBy('id', 'desc')->count());
        $view->with('brands', Brand::orderBy('brand_name', 'asc')->get());
        $view->with('headerPages', Post::orderBy('title', 'asc')->where('show_in_header_menu', '1')->select('id', 'title', 'slug')->get());
        $view->with('footerPages', Post::orderBy('title', 'asc')->where('show_in_footer_menu', '1')->select('id', 'title', 'slug')->get());
        $view->with('totalBrands', Brand::all()->count());
        $view->with('totalActiveUsers', User::whereUserType('user')->whereActiveStatus('1')->count());
        $view->with('totalAdminUsers', User::whereUserType('admin')->count());
        $view->with('totalReportedAds', ReportAdvertise::all()->count());
    }

}
