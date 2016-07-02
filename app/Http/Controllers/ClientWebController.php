<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\Auth\UserManager;

class ClientWebController extends Controller
{
    use UserManager;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'client.web';

    /**
     * The home page route of client.
     *
     * @var string
     */
    protected $home = 'client';

    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('auth:client.web');
        $this->setupTheme(config('theme.themes.client.theme'), config('theme.themes.client.layout'));
        parent::__construct();
    }

}
