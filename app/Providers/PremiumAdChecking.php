<?php

namespace App\Providers;

use App\Advertise;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class PremiumAdChecking extends ServiceProvider
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
        $ads = Advertise::where('move_to_regular', '<', Carbon::now()->format('Y-m-d'))->where('status', '1')->where('price_plan', 'premium')->get();
        foreach ($ads as $ad) {
            $ad->price_plan = 'regular';
            $ad->save();
        }
    }
}
