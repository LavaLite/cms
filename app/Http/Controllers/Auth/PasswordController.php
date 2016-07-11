<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Litepie\User\Traits\Auth\PasswordManager;
use Request;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
     */

    use PasswordManager;

    /**
     * The password broker that should be used.
     *
     * @var string
     */
    protected $broker = 'user';

    /**
     * The password broker that should be used.
     *
     * @var string
     */
    protected $guard = 'user.web';

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $guard = Request::input(config('user.params.type'), null);
        $this->setGuard($guard);
        $this->setRedirectTo();
        $this->setPasswordBroker();
        $this->middleware('guest');
        $this->setTheme();
    }

}
