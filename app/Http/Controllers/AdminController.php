<?php

namespace App\Http\Controllers;

class AdminController extends WebCurdController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth.role:admin');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->theme->of('admin::user.home')->render();
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return $this->theme->of('admin::user.profile')->render();
    }

    /**
     * Show locked screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        $this->theme->layout('blank');

        return $this->theme->of('admin::user.lock')->render();
    }

    /**
     * Show master table lists.
     *
     * @return \Illuminate\Http\Response
     */
    public function masters()
    {
        return $this->theme->of('admin::general.masters')->render();
    }

    /**
     * Show reports homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports()
    {
        return $this->theme->of('admin::general.reports')->render();
    }
}
