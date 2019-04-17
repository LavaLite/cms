<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\Auth\AuthenticatesUsers;
use Litepie\User\Traits\RoutesAndGuards;
use Illuminate\Http\Request;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request = null)
    {
        $guard = request()->guard;
        guard($guard . '.web');
        $this->response = resolve(AuthResponse::class);
        $this->middleware("guest:{$guard}.web", ['except' => ['logout', 'verify', 'locked', 'sendVerification']]);
        $this->setTheme();
    }
}
