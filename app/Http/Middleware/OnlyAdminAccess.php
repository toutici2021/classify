<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class OnlyAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if (!Auth::check()) {
            return redirect()->guest(route('login'))->with(responseMessage(1, 'error', 'You are not authorized to access this page'));
        }

        $user = Auth::user();

        if (!$user->is_admin()) {
            return redirect()->guest(route('login'))->with(responseMessage(0, 'error', 'You do not have proper permission to view this page'));
        }
        return $next($request);
    }
}
