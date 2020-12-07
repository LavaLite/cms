<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as BaseController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Litepie\User\Traits\RoutesAndGuards;

class APILoginController extends BaseController
{

    use RoutesAndGuards;
    /**
     * @var form  array/collection.
     */
    protected $form;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setGuard();
        $this->middleware('auth:' . guard(), ['except' => ['login']]);
    }

    /**
     * Login using email and password.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
        $model = $this->getAuthModel();
        $user = $model::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return ['token' => $user->createToken($request->device_name)->plainTextToken];
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $user = $request->user()->only(['name',
            'email',
            'sex',
            'mobile',
            'languages',
            'designation',
            'picture']);
        $user['token'] = $request->header('Authorization');
        return compact('user');
    }

}
