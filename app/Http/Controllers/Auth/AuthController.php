<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use User;
use Validator;

class AuthController extends Controller
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
     * Redirect path after login or register.
     */
    protected $redirectPath = 'user';

    /**
     * Redirect path after unsucessful attempt.
     */
    protected $loginPath = 'auth/user/login';

    /**
     * Store user role.
     */
    protected $role = 'user';

    public function __construct(Request $request)
    {
        $this->role = $request->route('role');
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->loginPath = "auth/{$this->role}/login";
        $this->redirectPath = $this->role;

        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
    }

    /**
     * Show the user login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(Request $request)
    {
        if (!User::roleExists($this->role) || $this->role == config('user.superuser_role', 'superuser')) {
            throw new NotFoundHttpException();
        }

        $role = $this->role;

        return $this->theme->of('public::user.login', compact('role'))->render();
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

        return Redirect::to($this->loginPath);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function getRegister(Request $request)
    {
        if (!User::roleExists($this->role) || $this->role == config('user.superuser_role', 'superuser') || $this->role == 'admin') {
            throw new NotFoundHttpException();
        }

        $role = $this->role;

        return $this->theme->of('public::user.register', compact('role'))->render();
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
        if (!User::roleExists($this->role) || $this->role == config('user.superuser_role', 'superuser') || $this->role == 'admin') {
            throw new NotFoundHttpException();
        }

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $role = User::findRole($role);
        $user->attachRole($this->role);

        return $user;
    }
}
