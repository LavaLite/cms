<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\Auth\UserManager;

class AdminApiController extends Controller
{
    use UserManager;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'admin.api';

    public function __construct()
    {
        $this->middleware('api');
        $this->middleware('jwt.auth:admin.api');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->theme->of($this->getView('home'))->render();
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return $this->theme->of($this->getView('profile'))->render();
    }

    /**
     * Show locked screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        $this->theme->layout('blank');

        return $this->theme->of($this->getView('lock'))->render();
    }

    /**
     * Show master table lists.
     *
     * @return \Illuminate\Http\Response
     */
    public function masters()
    {
        return $this->theme->of($this->getView('masters'))->render();
    }

    /**
     * Show reports homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports()
    {
        return $this->theme->of($this->getView('reports'))->render();
    }
}
