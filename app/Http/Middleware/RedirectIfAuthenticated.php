<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $guard = guard();
        if (empty($guard)) {
            $guard = config('auth.defaults.guard');
        }

        if (Auth::guard($guard)->check()) {
            $guard = current(explode('.', $guard));

            return redirect()->intended($guard);
        }

        return $next($request);
    }
}