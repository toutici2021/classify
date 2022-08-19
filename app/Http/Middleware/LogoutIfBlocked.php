<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Http\Request;

class LogoutIfBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->active_status != User::STATUS_ACTIVE) {
            auth()->logout();
            return redirect()->route('login')->with('message', 'Your account is locked. Contact administrator');
        }
        return $next($request);
    }
}
