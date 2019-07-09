<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Litepie\User\Traits\RoutesAndGuards;

class APILogin extends BaseController
{
    use RoutesAndGuards;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct(Request $request = null)
    {
        $guard = $request->guard;
        guard($guard . '.web');
        $this->middleware('auth.basic.once');
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        return $request->user();
    }

}
