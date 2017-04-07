<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\ProfileAndPassword;

class ClientController extends Controller
{
    use ProfileAndPassword;

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
        $this->middleware('auth:client.web');
        $this->setupTheme("public", "default");
        parent::__construct();
    }

}
