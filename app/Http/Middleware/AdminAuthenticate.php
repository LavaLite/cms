<?php

namespace App\Http\Middleware;

use Closure;
use Lavalite\User\User;
use Illuminate\Contracts\Auth\Guard;

class AdminAuthenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param Guard $auth
     */
    public function __construct(User $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->auth->check()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        if (!$this->auth->hasRole('admin')) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        return $next($request);
    }
}
