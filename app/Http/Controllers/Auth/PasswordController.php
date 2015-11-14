<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use User;

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

    use ResetsPasswords;

    /*
     *
     */
    protected $redirectTo = '/user';

    /**
     * Store user role.
     */
    protected $role = 'user';

    /**
     * Create a new password controller instance.
     */
    public function __construct(Request $request)
    {
        $this->middleware('guest');
        $this->role = $request->route('role');
        $this->redirectPath = $this->role;
        $this->setupTheme(config('cms.themes.public.theme'), config('cms.themes.public.layout'));
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmail(Request $request)
    {
        if (!User::roleExists($this->role)) {
            throw new NotFoundHttpException();
        }

        $role = $this->role;

        return $this->theme->of('public::user.password', compact('role'))->render();
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\Response
     */
    public function getReset($token = null)
    {
        if (!User::roleExists($this->role)) {
            throw new NotFoundHttpException();
        }

        $role = $this->role;
        if (is_null($token)) {
            throw new NotFoundHttpException();
        }

        return $this->theme->of('public::user.reset', compact('token'))->render();
    }
}
