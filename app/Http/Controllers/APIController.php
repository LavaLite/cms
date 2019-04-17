<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Litepie\User\Traits\RoutesAndGuards;

class APIController extends BaseController
{
    use RoutesAndGuards;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct(Request $request = null)
    {
        $guard = $request->guard_url;
        $this->middleware('guard:' . $guard . '.api');
        $this->middleware('role:' . $guard);
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        return $request->user();
    }

}
