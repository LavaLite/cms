<?php

namespace App\Http\Controllers\Api;

use Litepie\User\Traits\ProfileAndPassword;

class UserController extends Controller
{
    use ProfileAndPassword;

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'api';

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('active:api');
        parent::__construct();
    }

}
