<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Lavalite\Filer\FilerTrait;
use Lavalite\User\Traits\CheckPermission;
use URL;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use CheckPermission, Authenticatable, Authorizable, CanResetPassword, FilerTrait, SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'photo'         => 'array',
        'permissions'   => 'array',
    ];

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
        $this->initialize();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable = config('package.user.user.fillable');
        $this->uploads = config('package.user.user.uploadable');
        $this->uploadRootFolder = config('package.user.user.upload_root_folder');
        $this->table = config('package.user.user.table');
    }

    /**
     * Returns the profile picture of the user.
     *
     * @return string image path
     */
    public function getPictureAttribute($value)
    {
        if (!empty($value)) {
            $photo = json_encode($value);

            return URL::to($photo['folder'].'/'.$photo['file']);
        }

        if ($this->sex == 'Female') {
            return URL::to('images/avatar/female.png');
        }

        return URL::to('images/avatar/male.png');
    }

    /**
     * Returns the joined date of the user.
     *
     * @return string date
     */
    public function getJoinedAttribute()
    {
        return $this->created_at->format(config('cms.format.date'));
    }
}
