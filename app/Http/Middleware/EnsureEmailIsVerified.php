<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        $guard = guard();
        if (!$request->user() ||
            ($request->user() instanceof MustVerifyEmail &&
                !$request->user()->hasVerifiedEmail())) {

            $guard = current(explode('.', guard()));

            return $request->expectsJson()
            ? abort(403, 'Your email address is not verified.')
            : Redirect::route($redirectToRoute ?: 'verification.notice', ['guard' => $guard]);
        }

        return $next($request);
    }
}
