<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Litepie\User\Traits\RoutesAndGuards;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Response\Auth\Response as AuthResponse;

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

    use RoutesAndGuards, ThemeAndViews, ValidatesRequests, AuthenticatesUsers;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->response   = resolve(AuthResponse::class);
        $this->setRedirectTo();
        $this->middleware('guest:' . $this->getGuard(), ['except' => ['logout', 'verify', 'locked', 'sendVerification']]);
        $this->setTheme();
    }
}
