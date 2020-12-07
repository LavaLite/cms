<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as ContractMustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Litepie\User\Models\User as BaseUser;
use Litepie\User\Traits\Auth\MustVerifyEmail;

class User extends BaseUser implements ContractMustVerifyEmail
{

    use MustVerifyEmail, HasApiTokens;
    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'users.user.model';

}
