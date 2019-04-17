<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;

use Litepie\User\Traits\Auth\SendsPasswordResetEmails;
use Litepie\Theme\ThemeAndViews;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails, ThemeAndViews;

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
        $this->middleware('guest');
        $this->setTheme();
    }
}
