<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\ProfileAndPassword;

class UserController extends Controller
{
    use ProfileAndPassword;

    /**
     * The authentication guard that should be used.
     * @var string
     */
    protected $guard = 'web';

    /**
     * The home page route of user.
     * @var string
     */
    protected $home = 'home';

    public function __construct()
    {
        $this->middleware('auth:'.$this->getGuard(), ['except' => ['locked']]);
        $this->middleware('active:'.$this->getGuard());
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        parent::__construct();
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        $this->theme->prependTitle('Dashboard');
        $this->theme->asset()->usepath()->add('fullcalendar-css', 'packages/fullcalendar/fullcalendar.min.css');
        $this->theme->asset()->container('extra')->usepath()->add('fullcalendar-js', 'packages/fullcalendar/fullcalendar.min.js');
        return $this->theme->of($this->getView('home'))->render();
    }
}
