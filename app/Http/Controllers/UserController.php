<?php

namespace App\Http\Controllers;

Use Page;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors.
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins, ResetsPasswords {
        AuthenticatesAndRegistersUsers::redirectPath insteadof ResetsPasswords;
    }

    /**
     * Redirect path after login or register
     *
     */
    protected $redirectPath = '/user';

    /**
     * Redirect path after unsucessful attempt.
     *
     */
    protected $loginPath = '/login';

    public function __construct()
    {
        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
        $this->middleware('auth.user', ['except' => ['getLogin', 'postLogin', 'getLogout', 'getEmail', 'postEmail', 'getReset', 'postReset']]);
    }

    /**
     * Show the user login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }
        return $this->theme->of('public::user.login')->render();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function logout()
    {
        User::logout();
        event('user.logout');

        return Redirect::to('/login');
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function getRegister()
    {
        return $this->theme->of('public::user.register')->render();
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmail()
    {
        return $this->theme->of('public::user.password')->render();
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

        return $this->theme->of('public::user.reset', compact('token'))->render();
    }

    public function getProfile()
    {
        if (User::check()) {
            $user = User::user();
            return $this->theme->of('user::user.public.profile', compact('user'))->render();
        }

        return Redirect::to('login');
    }

    public function postProfile()
    {
        $id = User::getUser()->id;
        $result = $this->user->profileedit($id);
        if ($result['success']) {
            // Success!
            Session::flash('success', $result['message']);

            return Redirect::to('user/profile');
        } else {
            Session::flash('error', $result['message']);

            return Redirect::to('user/profile')
                ->withInput()
                ->withErrors($result['errors']);
        }
    }

    public function home()
    {
        $data['page'] = Page::getPage('user');
        $this->theme->setTitle($data['page']->title);
        $this->theme->setKeywords($data['page']->keyword);
        $this->theme->setDescription($data['page']->description);

        return $this->theme->of('user.home', $data)->render();
    }
}
