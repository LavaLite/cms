<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\UserPages;
use Litepie\User\Traits\RoutesAndGuards;
use Litepie\User\Http\Response\UserResponse;

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
        $this->response   = resolve(UserResponse::class);
        if (!empty(getenv('guard')) && getenv('guard') != 'web') {
            $this->middleware('auth:' . $this->getGuard());
        }

        $this->setTheme();
    }

}
