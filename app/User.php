<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Foundation\Auth\User as Authenticatable;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Filer\Traits\Filer;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\User\Traits\Acl\CheckPermission;
use Litepie\User\Traits\User as UserProfile;
use Litepie\User\Contracts\UserPolicy;

class User extends Authenticatable implements UserPolicy
{
    use Filer, Notifiable, CheckPermission, UserProfile, SoftDeletes, Hashids, Slugger, PresentableTrait;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'litepie.user.user';

    /**
     * Initialiaze page modal.
     *
     * @var attributes
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

    public function getDobAttribute($val)
    {

        if ($val == '0000-00-00' || empty($val)) {
            return '';
        }
        return format_date(($val));
    }

    public function messages()
    {
        return $this->morphMany('\Litepie\Message\Models\Message', 'user');
    }


}
