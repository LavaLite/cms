<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Litepie\Http\Response\AuthResponse;
use Litepie\Theme\ThemeAndViews;

class AuthenticatedSessionController extends Controller
{
    use ThemeAndViews;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('set.guard');
        $this->middleware(function ($request, $next) {
            $this->response = resolve(AuthResponse::class);
            $this->setTheme();
            return $next($request);
        });
    }

    /**
     * Display the login view.
     */
    public function create()
    {
        return $this->response
            ->setMetaTitle(__('Login'))
            ->layout('auth')
            ->view('auth.login')
            ->output();
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard(guard())->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
