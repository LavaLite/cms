<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;
use Litepie\User\Traits\UserPages;
use App\Http\Response\ResourceResponse;


class UserController extends BaseController
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
        $this->response = app(ResourceResponse::class);
        $this->setTheme();
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->response
            ->layout('user')
            ->title('Dashboard')
            ->view('home')
            ->output();
    }

}
