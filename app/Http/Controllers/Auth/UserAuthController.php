<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use User;
use Validator;

class UserAuthController extends Controller
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

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Redirect path after login or register.
     */
    protected $redirectPath = '/home';

    /**
     * Redirect path after unsucessful attempt.
     */
    protected $loginPath = '/login';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
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
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $role = User::findRole('user');
        $user->attachRole($role);

        return $user;
    }
}
