<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Litepie\User\Traits\Auth\AuthenticatesUsers;
use Litepie\User\Traits\RoutesAndGuards;

class APILoginController extends BaseController
{
    use RoutesAndGuards, AuthenticatesUsers;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct(Request $request = null)
    {
        $guard = $request->guard;
        guard($guard . '.web');
        $this->middleware('auth.basic.once')->only(['profile']);
        $this->middleware('web')->only(['postLogin', 'me']);
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $data['user'] = $request->user();
        return $data;
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        return $this->login($request);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        $token['token'] = base64_encode($request->email . ':' . $request->password);
        return $token;
    }
}
