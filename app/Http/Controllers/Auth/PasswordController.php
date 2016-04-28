<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Litepie\User\Traits\Auth\PasswordManager;

class PasswordController extends Controller
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

    use PasswordManager;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
    }

}
