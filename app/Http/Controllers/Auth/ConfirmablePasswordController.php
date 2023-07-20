<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Litepie\Http\Response\AuthResponse;
use Litepie\Theme\ThemeAndViews;

class ConfirmablePasswordController extends Controller
{
    use ThemeAndViews;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        $this->middleware(function ($request, $next) {
            $this->response = resolve(AuthResponse::class);
            $this->setTheme();
            return $next($request);
        });
    }
    /**
     * Show the confirm password view.
     */
    public function show()
    {
        return $this->response->setMetaTitle('Confirm Password')
            ->layout('auth')
            ->view('auth.confirm-password')
            ->output();
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (!Auth::guard(guard())->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
