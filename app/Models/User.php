<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as ContractMustVerifyEmail;
use Litepie\User\Interfaces\UserPolicyInterface;
use Litepie\User\Models\User as BaseModel;
use Litepie\User\Traits\Auth\MustVerifyEmail;

class User extends BaseModel implements ContractMustVerifyEmail, UserPolicyInterface
{
    use MustVerifyEmail;
}
