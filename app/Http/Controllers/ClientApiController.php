<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\Auth\UserManager;

class ClientApiController extends Controller
{
    use UserManager;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'client.api';

    public function __construct()
    {
        $this->middleware('api');
        $this->middleware('auth.jwt:client.api');
        $this->setupTheme(config('theme.themes.client.theme'), config('theme.themes.client.layout'));
        parent::__construct();
    }

}
