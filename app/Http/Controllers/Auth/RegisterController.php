<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\Auth\RegistersUsers;
use Litepie\User\Traits\RoutesAndGuards;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers, RoutesAndGuards, ThemeAndViews;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
