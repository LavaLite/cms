<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Contracts\User\JWTSubject;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Foundation\Auth\User as Authenticatable;
use Litepie\Hashids\Traits\Hashids;
use Litepie\User\Traits\Users\UserProfile;

class Client extends Authenticatable implements JWTSubject
{
    use UserProfile, SoftDeletes, Hashids, Slugger;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'user.client';

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct($attributes = [])
    {
        $config = config($this->config);

        foreach ($config as $key => $val) {

            if (property_exists(get_called_class(), $key)) {
                $this->$key = $val;
            }

        }

        parent::__construct($attributes);

    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

}
