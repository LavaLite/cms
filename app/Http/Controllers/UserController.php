<?php

namespace App\Http\Controllers;

class UserController extends WebCurdController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth.role:user|admin');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
    }

    /**
     * Display dashboard.
     *
     * @return response
     */
    public function home()
    {
        return $this->theme->of('user::user.welcome')->render();
    }

}
