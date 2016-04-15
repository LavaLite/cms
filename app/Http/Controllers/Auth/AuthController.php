<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Litepie\User\Traits\RegisterAndLogin;

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
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'verify', 'sendVerification']]);
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
    }
}
