<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Theme;
use Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * Store theme
     */
    public $theme;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        config(['auth.guard' => $this->getGuard()]);
        $this->setGuard();
    }

    /* Setup theme for the controller.
     *
     */
    public function setupTheme($theme = 'default', $layout = 'default')
    {
        $this->theme = Theme::uses($theme)->layout($layout);
    }

    /**
     * Return authguard for the controller.
     *
     * @return type
     *
     */
    protected function getGuard()
    {
        if (!property_exists($this, 'guard')) return null;
        $route = Request::route('guard');
        return config("auth.routes.$route.{$this->guard}.guard");
    }

    /**
     * Get the model for the current guard.
     *
     * @return Response
     */
    function getAuthModel()
    {
        if (!property_exists($this, 'guard')) return null;
        
        $provider = config("auth.guards.{$this->guard}.provider", 'users');
        return config("auth.providers.$provider.model", App\User::class);
    }
    /**
     * Somewhere in your controller.
     */
    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }
    /**
     * Return authguardroute for the controller.
     *
     * @return type
     *
     */
    protected function getGuardRoute()
    {
        if (!property_exists($this, 'guard') || $this->guard =='web') return 'user';

        return current(explode(".", $this->guard));
    } 

    /**
     * Return authguardroute for the controller.
     *
     * @return type
     *
     */
    protected function setGuard()
    {
        putenv('guard='. $this->getGuard());
        putenv('auth.guard='.$this->getGuardRoute());
        putenv('auth.model='.$this->getAuthModel());
    } 

}
