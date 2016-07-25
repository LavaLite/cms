<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\Auth\UserManager;

class UserApiController extends Controller
{
    use UserManager;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'api';

    public function __construct()
    {
        $this->middleware('api');
        $this->middleware('jwt.auth:api');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        parent::__construct();
    }

}
