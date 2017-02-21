<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Litepie\User\Traits\Auth\ResetsPassword;

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

    use ResetsPassword;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setTheme();
        $this->middleware('guest');
    }
}
