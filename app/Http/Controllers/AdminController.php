<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\ProfileAndPassword;

class AdminController extends Controller
{
    use ProfileAndPassword;

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
        $this->theme->prependTitle('Dashboard');

        $this->theme->asset()->usepath()->add('fullcalendar-css', 'packages/fullcalendar/fullcalendar.min.css');
        $this->theme->asset()->container('extra')->usepath()->add('fullcalendar-js', 'packages/fullcalendar/fullcalendar.min.js');
        return $this->theme->of($this->getView('home'))->render();
    }

    /**
     * Show locked screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        $this->theme->layout('blank');

        return $this->theme->of('admin::general.locked')->render();
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
