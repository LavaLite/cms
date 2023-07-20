<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Litepie\Http\Response\AuthResponse;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;

class AuthenticatedApiController extends Controller
{
    use RoutesAndGuards, ThemeAndViews;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('set.guard');
        $this->middleware('auth')->only(['profile']);
        $this->middleware('guest')->only(['store']);
        $this->middleware(function ($request, $next) {
            $this->response = resolve(AuthResponse::class);
            $this->setTheme();
            return $next($request);
        });

    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'device_name' => 'required',
            ]);
            $model = $this->getAuthModel();
            $user = $model::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'email' => trans('auth.failed'),
                ]);
            }
            $token = $user->createToken($request->device_name)->plainTextToken;

            $user = $user->only([
                'name',
                'email',
                'sex',
                'mobile',
                'languages',
                'designation',
                'picture',
            ]);

            $user['token'] = $token;
            return $user;
        } catch (Exception $e) {
            return $e->errors();
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        $request
            ->user()
            ->currentAccessToken()
            ->delete();
        return [
            'code' => 200,
            'message' => trans('auth.loggedout'),
        ];
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $user = $request->user()->only([
            'name',
            'email',
            'sex',
            'mobile',
            'languages',
            'designation',
            'picture',
        ]);
        $user['token'] = trim($request->header('Authorization'), 'Bearer ');
        return compact('user');
    }
}
