<?php

namespace App;

use Litepie\User\Models\User as BaseUser;
use Illuminate\Contracts\Auth\MustVerifyEmail as ContractMustVerifyEmail;
use Litepie\User\Traits\Auth\MustVerifyEmail;

class User extends BaseUser implements ContractMustVerifyEmail
{

    use MustVerifyEmail;
    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'users.user.model';

}
