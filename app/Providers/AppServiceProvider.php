<?php

namespace App\Providers;

use App\Http\View\Composers\ViewComposer;
use Illuminate\Support\Facades\View;
use App\Option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        try {
            DB::connection()->getPdo();

            $options = Option::all()->pluck('option_value', 'option_key')->toArray();
            View::composer(['frontend.*'], ViewComposer::class);
            View::composer(['admin.*'], ViewComposer::class);
            $allOptions = [];
            $allOptions['options'] = $options;
            config($allOptions);

            view()->composer('*', function ($view) {
                $enable_monetize = get_option('enable_monetize');
                $loggedUser = null;
                if (Auth::check()) {
                    $loggedUser = Auth::user();
                }
                $view->with(['lUser' => $loggedUser, 'enable_monetize' => $enable_monetize]);
            });

        } catch (\Exception $e) {
            //echo $e->getMessage();
        }
    }
}
