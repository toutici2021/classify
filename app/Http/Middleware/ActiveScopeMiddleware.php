<?php

namespace App\Http\Middleware;

use App\Advertise;
use Carbon\Carbon;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ActiveScopeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Advertise::addGlobalScope('withOutExpireDate', function (Builder $builder) {
            $builder->where('expire_date', '>', Carbon::now()->format('Y-m-d'));
        });
        return $next($request);
    }
}
