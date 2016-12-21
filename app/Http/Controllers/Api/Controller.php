<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        config(['auth.guard' => $this->getGuard()]);
    }

    /**
     * Return authguard for the controller.
     *
     * @return type
     *
     */
    protected function getGuard()
    {

        if (!property_exists($this, 'guard')) {
            return null;
        }

        $route = Request::route('guard');
        return config("auth.routes.$route.{$this->guard}.guard");
    }

}
