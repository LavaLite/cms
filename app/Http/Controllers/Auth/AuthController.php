<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Request;
use Socialite;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Theme;
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
     * Default role to be assigned for newely created user.
     */
    protected $role = 'user';

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'login']]);
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
    }

    /**
     * Show the user login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return $this->theme->of('public::user.login')->render();
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function showRegistrationForm($role = null)
    {
        $role = empty($role) ? $this->getDefaultRole() : $role;

        if (!$this->isValidRole($role)) {
            throw new NotFoundHttpException();
        }

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
            'name'                 => 'required|max:255',
            'email'                => 'required|email|max:255|unique:users',
            'password'             => 'required|min:6',
            'g-recaptcha-response' => 'required|recaptcha',
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
        $role = empty($data['role']) ? $this->getDefaultRole() : $data['role'];

        if (!$this->isValidRole($role)) {
            throw new NotFoundHttpException();
        }

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => $data['password']
        ]);

        $role = User::findRole($role);
        $user->attachRole($role);

        return $user;
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        return $this->theme->of('public::user.social', compact('user'))->render();
    }

    /**
     * Get the default role for a user.
     *
     * @return string
     **/
    public function getDefaultRole()
    {
        return config('user.default_role', $this->role);
    }

    /**
     * Validate a given role.
     *
     * @return bool
     **/
    public function isValidRole($role)
    {
        if (!in_array($role, config('user.roles'))) {
            return false;
        }

        if (!User::roleExists($role)) {
            return false;
        }

        return true;
    }
}
