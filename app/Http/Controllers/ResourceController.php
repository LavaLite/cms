<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Response\ResourceResponse;
use Illuminate\Http\Request;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;
use Litepie\User\Traits\UserPages;

class ResourceController extends BaseController
{
    use RoutesAndGuards, ThemeAndViews, UserPages;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        guard(request()->guard . '.web');
        $this->middleware('auth:' . guard());
        $this->middleware('verified:guard.verification.notice');
        $this->middleware('role:' . $this->getGuardRoute());
        $this->response = app(ResourceResponse::class);
        $this->setTheme();
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $user = $request->user()->toArray();
        return $this->response->setMetaTitle(__('app.dashboard'))
            ->view('home')
            ->data(compact('user'))
            ->output();
    }
}
