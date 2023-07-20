<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Litepie\Http\Response\AuthResponse;
use Litepie\Theme\ThemeAndViews;

class ProfileController extends Controller
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
     * Display the user's profile form.
     */
    public function edit(Request $request)
    {
        return $this->response->setMetaTitle('Update Profile')
        ->layout('user')
        ->view('user.profile')
            ->data([
                'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                'status' => session('status'),
            ])
            ->output();

    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::back();
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
