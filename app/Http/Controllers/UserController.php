<?php

namespace App\Http\Controllers;

class UserController extends WebCurdController
{
    public function __construct()
    {
        parent::__construct();
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
    }

    /**
     * Display dashboard.
     *
     * @return response
     */
    public function home()
    {
        return $this->theme->of('public::welcome')->render();
    }
}
