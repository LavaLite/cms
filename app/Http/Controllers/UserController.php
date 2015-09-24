<?php

namespace App\Http\Controllers;

Use Page;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;

class UserController extends Controller
{

    public function __construct()
    {
        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
        $this->middleware('auth.user');
    }

    /**
     * Display dashboard
     *
     * @return response
     */
    public function home()
    {
        return $this->theme->of('public::user.dashboard')->render();
    }
}
