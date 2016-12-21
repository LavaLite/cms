<?php

namespace App\Http\Controllers\Api;

use Litepie\User\Traits\ProfileAndPassword;

class ClientController extends Controller
{
    use ProfileAndPassword;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'client.api';

    public function __construct()
    {
        $this->middleware('auth:client.api');
        $this->middleware('active:client.api');
        parent::__construct();
    }

}
