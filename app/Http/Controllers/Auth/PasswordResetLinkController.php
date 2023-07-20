<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Inertia\Response;
use Litepie\Http\Response\AuthResponse;
use Litepie\Theme\ThemeAndViews;

class PasswordResetLinkController extends Controller
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
     * Display the password reset link request view.
     */
    public function create()
    {
        return $this->response->setMetaTitle('Forgot Password')
            ->layout('auth')
            ->view('password.email')
            ->output();
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }
}
