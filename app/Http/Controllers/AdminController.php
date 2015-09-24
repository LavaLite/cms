<?php
namespace App\Http\Controllers;

use User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;

class AdminController extends Controller
{

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->setupTheme(config('cms.themes.admin.theme'), config('cms.themes.admin.layout'));
        $this->middleware('auth.admin');
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
