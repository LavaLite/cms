<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::guard($guard)->user()->hasRoles($role)) {
            return $next($request);
        }

        if ($request->ajax()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect()->guest('/login');
        }
    }
}
