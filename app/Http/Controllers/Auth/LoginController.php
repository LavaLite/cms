<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Litepie\Http\Controllers\Controller;
use Litepie\Http\Response\AuthResponse;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use RoutesAndGuards, ThemeAndViews, AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setGuard();
        $this->response = resolve(AuthResponse::class);
        $this->middleware("guest:" . guard(), ['except' => ['logout', 'verify', 'locked', 'sendVerification']]);
        $this->setTheme();
    }

    /**
     * Show the user login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return $this->response
            ->setMetaTitle(__('Login'))
            ->layout('auth')
            ->view('auth.login')
            ->output();
    }
}
