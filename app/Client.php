<?php

namespace App;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as ContractMustVerifyEmail;
use Litepie\User\Models\Client as BaseClient;

class Client extends BaseClient implements ContractMustVerifyEmail
{
    use MustVerifyEmail;
    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'users.client.model';

    /**
     * Roles for the user type.
     *
     * @var array
     */
    protected $role = 'client';
}
