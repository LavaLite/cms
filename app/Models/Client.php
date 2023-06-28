<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as ContractMustVerifyEmail;
use Litepie\User\Interfaces\UserPolicyInterface;
use Litepie\User\Models\Client as BaseModel;
use Litepie\User\Traits\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class Client extends BaseModel implements ContractMustVerifyEmail, UserPolicyInterface
{
    use HasApiTokens, MustVerifyEmail;
}
