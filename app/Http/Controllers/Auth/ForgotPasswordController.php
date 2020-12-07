<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;

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

    use RoutesAndGuards, SendsPasswordResetEmails, ThemeAndViews;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setGuard();
        $this->response = resolve(AuthResponse::class);
        $this->middleware('guest');
        $this->setTheme();
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return $this->response->setMetaTitle('Forgot Password')
            ->layout('auth')
            ->view('auth.passwords.email')
            ->output();
    }
}
