<?php

namespace App\Http\Middleware;

use Closure;
use Closure as ClosureAlias;
use Illuminate\Http\Request;


use App\Option;

class CheckLicense
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param ClosureAlias $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (empty(get_option('purchase_code')))
            return redirect()->route('registerApplication');

        return $next($request);
    }
}
