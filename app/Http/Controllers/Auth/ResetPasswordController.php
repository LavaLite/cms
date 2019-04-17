<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Litepie\User\Traits\Auth\ResetsPasswords;
use Litepie\Theme\ThemeAndViews;

class ResetPasswordController extends Controller
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

    use ResetsPasswords, ThemeAndViews;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $guard = request()->guard;
        guard($guard . '.web');
        $this->response = resolve(AuthResponse::class);
        $this->redirectTo = '/'.$guard;
        $this->middleware('guest');
        $this->setTheme();
    }
}
