<?php
namespace App\Http\Controllers;

use User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;

class AdminController extends Controller
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


    use AuthenticatesAndRegistersUsers, ThrottlesLogins, ResetsPasswords {
        AuthenticatesAndRegistersUsers::redirectPath insteadof ResetsPasswords;
    }

    /**
     * Redirect path after login or register
     *
     */
    protected $redirectPath = '/admin';

    /**
     * Redirect path after unsucessful attempt.
     *
     */
    protected $loginPath = 'admin/login';


    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->setupTheme(config('cms.themes.admin.theme'), config('cms.themes.admin.layout'));
        $this->middleware('auth.admin', ['except' => ['getLogin', 'postLogin', 'getLogout', 'getEmail', 'postEmail', 'getReset', 'postReset']]);
    }

    /**
     * Show the login form
     *
     * @return HTML
     */
    public function getLogin()
    {
        $this->theme->layout('blank');

        return $this->theme->of('admin::user.login')->render();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function getLogout()
    {
        User::logout();
        event('user.logout');
        return redirect()->to($this->loginPath);
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmail()
    {
        $this->theme->layout('blank');
        return $this->theme->of('admin::user.password')->render();
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  string  $token
     * @return \Illuminate\Http\Response
     */
    public function getReset($token = null)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }

        $this->theme->layout('blank');
        return $this->theme->of('admin::user.reset', compact('token'))->render();
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->theme->of('admin::user.home')->render();
    }

    /**
     * Show locked screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        $this->theme->layout('blank');
        return $this->theme->of('admin::user.lock')->render();
    }


}
