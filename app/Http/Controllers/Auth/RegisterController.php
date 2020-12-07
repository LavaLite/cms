<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use ThemeAndViews, RegistersUsers, RoutesAndGuards;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setGuard();
        $this->response = resolve(AuthResponse::class);
        $this->middleware('guest:' . guard());
        $this->setTheme();
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function showRegistrationForm()
    {
        $this->canRegister();

        return $this->response->setMetaTitle(__('Register'))
            ->view('auth.register')
            ->layout('auth')
            ->output();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:' . $this->getGuardTable(),
            'password' => 'required|min:6|confirmed',
        ];

        if (config('recaptcha.enable')) {
            $rules['g-recaptcha-response'] = 'required|recaptcha';
        }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    public function create(array $data)
    {
        $this->canRegister();

        $data['api_token'] = Str::random(60);

        $model = $this->getAuthModel();
        $user = $model::create($data);
        $this->attachRoles($user);

        return $user;
    }

    public function canRegister()
    {
        $guard = $this->getGuardRoute();

        if (in_array($guard, config('auth.register.allowed'))) {
            return true;
        }

        return abort(403, "You are not allowed to register as [$guard]");
    }

    public function attachRoles($user)
    {
        $guard = $this->getGuardRoute();
        $roles = config('auth.register.roles.' . $guard, null);

        if ($roles == null) {
            return;
        }

        foreach ($roles as $role) {
            $roleId = Role::findBySlug($role)->id;
            $user->attachRole($roleId);
        }

        return true;
    }
}
