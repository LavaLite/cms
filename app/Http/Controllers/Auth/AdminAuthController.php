<?php
namespace App\Http\Controllers\Auth;

use App\User as UserModal;
use User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

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
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->setupTheme(config('cms.themes.admin.theme'), config('cms.themes.admin.layout'));
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
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function getRegister()
    {
        return $this->theme->of('admin::user.register')->render();
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
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
        $user = UserModal::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'active' => 0,
        ]);

        User::attachRole($user->id, 'admin');

        return $user;
    }

}
