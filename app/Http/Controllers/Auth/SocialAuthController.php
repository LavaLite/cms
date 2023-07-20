<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Litepie\Http\Response\AuthResponse;
use Litepie\User\Traits\RoutesAndGuards;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class SocialAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */
    use RoutesAndGuards;
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->response = resolve(AuthResponse::class);
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        if (!config("services.{$provider}.client_id")) {
            abort(404, "Please configure the [{$provider}] parameters.");
        }

        $this->setCallbackUrl($provider);

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $this->setCallbackUrl($provider);
        $guard = $this->getGuard();
        $user = Socialite::driver($provider)->user();
        $model = $this->getAuthModel();
        $data = [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'status' => 'Active',
            'password' => bcrypt(Str::random(8)),
            'api_token' => Str::random(60),
        ];
        $user = $model::whereEmail($data['email'])->first();

        if (!is_null($user)) {
            app('auth')->login($user, false, $guard);
        } else {
            $user = $model::create($data);
            app('auth')->login($user, false, $guard);
        }

        return redirect()->intented($this->redirectTo);
    }

    /**
     * undocumented function.
     *
     * @return void
     *
     * @author
     **/
    public function setCallbackUrl($provider)
    {
        $guard = $this->getGuardRoute();
        $currentUrl = config("services.{$provider}.redirect");
        $newUrl = str_replace('/user/', "/$guard/", $currentUrl);
        config(["services.{$provider}.redirect" => $newUrl]);
    }
}
