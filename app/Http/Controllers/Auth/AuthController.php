<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Litepie\User\Traits\Auth\RegisterAndLogin;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
     */

    use RegisterAndLogin;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'home';

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = null;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $guard = Request::input(config('user.params.type'), null);
        $this->setGuard($guard);
        $this->setRedirectTo();
        $this->middleware('web');
        $this->middleware('guest:' . $guard, ['except' => ['logout', 'verify', 'locked', 'sendVerification']]);
        $this->setTheme();
    }
}
