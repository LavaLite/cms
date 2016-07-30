<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\Auth\UserManager;

class AdminWebController extends Controller
{
    use UserManager;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    public $guard = 'admin.web';

    /**
     * The home page route of admin.
     *
     * @var string
     */
    public $home = 'admin';

    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('auth:admin.web');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        parent::__construct();
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $this->theme->asset()->add('fullcalendar-css', 'packages/fullcalendar/fullcalendar.min.css');
        $this->theme->asset()->container('extra')->add('fullcalendar-js', 'packages/fullcalendar/fullcalendar.min.js');
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
