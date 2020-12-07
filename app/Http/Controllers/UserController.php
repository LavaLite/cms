<?php

namespace App\Http\Controllers;

use Litepie\Http\Controllers\Controller as BaseController;
use App\Http\Response\ResourceResponse;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\UserPages;
use Litepie\User\Traits\RoutesAndGuards;

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
        $this->setGuard();
        $this->response = app(ResourceResponse::class);
        $this->middleware("auth:" . guard());
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
            ->title(__('Dashboard'))
            ->view('home')
            ->output();
    }

}
