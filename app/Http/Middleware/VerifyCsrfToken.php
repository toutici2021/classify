<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/newsletter/subscribe',
        '/member/ads/report-ads',
        '/settings/save-settings',
        '/settings/save-payment-settings',
        '/settings/saveMailEnvironment',
        '/settings/save-mailchimp-settings'
    ];
}
