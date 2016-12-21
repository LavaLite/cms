<?php

namespace App\Http\Controllers\Api;

use Litepie\User\Traits\ProfileAndPassword;

class AdminController extends Controller
{
    use ProfileAndPassword;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'admin.api';

    public function __construct()
    {
        $this->middleware('auth:admin.api');
        parent::__construct();
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
