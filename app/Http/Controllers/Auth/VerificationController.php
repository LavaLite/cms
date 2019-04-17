<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Litepie\Theme\ThemeAndViews;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
     */

    use VerifiesEmails, ThemeAndViews;

    /**
     * Where to redirect users after verification.
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
        $this->redirectTo = $guard;
        $this->response = resolve(AuthResponse::class);
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->setTheme();
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
