<?php

namespace App\Providers;

use App\Advertise;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class ExpiredAdChecking extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $ads = Advertise::where('expire_date', '<', Carbon::now()->format('Y-m-d'))->where('status', '1')->get();
        foreach ($ads as $ad) {
            $ad->status = '3';
            $ad->save();
        }
    }
}
