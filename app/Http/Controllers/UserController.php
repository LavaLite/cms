<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\Auth\UserManager;

class UserController extends Controller
{
    use UserManager;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'user.web';

    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('auth:user.web');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
    }

}
