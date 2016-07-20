<?php

return [

    /*
     *--------------------------------------------------------------------------
     * Package modules
     *--------------------------------------------------------------------------
     *
     * Here is the modules included in this package which can be used in this package.
     *
     */
    'modules'          => ['user', 'role', 'permission'],

    /*
     *--------------------------------------------------------------------------
     * Restricted user's roles.
     *--------------------------------------------------------------------------
     *
     * This array contains the roles which a user can't be assigned
     * form public side like admin or superuser.
     *
     */
    'restricted_roles' => ['admin', 'superuser'],

    /*
     *--------------------------------------------------------------------------
     * User's default role
     *--------------------------------------------------------------------------
     *
     * Deafult role for a user if it is not specifyed explicitly.
     *
     */
    'default_roles'    => ['user'],

    /*
     *--------------------------------------------------------------------------
     * Request Params
     *--------------------------------------------------------------------------
     *
     * Request parameters that will be used determine type of user
     *
     */
    'params'           => ['type' => 'role'],

    /*
     *--------------------------------------------------------------------------
     * Superuser role
     *--------------------------------------------------------------------------
     *
     * Super user role name for a user, a super user can perform all functionalities
     * on the website.
     *
     */
    'superuser_role'   => 'superuser',

    /*
     *--------------------------------------------------------------------------
     * Verify email
     *--------------------------------------------------------------------------
     *
     * Verify email of a user before redirectiong to dashboard.
     *
     */
    'verify_email'     => false,

    /*
     *--------------------------------------------------------------------------
     * Permission module
     *--------------------------------------------------------------------------
     *
     * Configuration for the permission module.
     *
     */
    'permission'       => [
        'model'      => 'Litepie\User\Models\Permission',
        'table'      => 'permissions',
        'primaryKey' => 'id',
        'hidden'     => [],
        'visible'    => [],
        'guarded'    => ['*'],
        'slugs'      => ['slug' => 'name'],
        'dates'      => ['deleted_at'],
        'appends'    => [''],
        'fillable'   => ['name', 'slug'],
        'listfields' => ['name', 'slug'],
        'translate'  => [],
        'perPage'    => '20',

    ],
    /*
     *--------------------------------------------------------------------------
     * Role module
     *--------------------------------------------------------------------------
     *
     * Configuration for the role module.
     *
     */
    'role'             => [
        'model'      => 'Litepie\User\Models\Role',
        'table'      => 'roles',
        'primaryKey' => 'id',
        'hidden'     => [],
        'visible'    => [],
        'guarded'    => ['*'],
        'slugs'      => [],
        'dates'      => ['deleted_at'],
        'appends'    => [''],
        'fillable'   => ['name', 'permissions'],
        'listfields' => ['name'],
        'casts'      => [
            'permissions' => 'array',
        ],
        'translate'  => ['name'],
        'perPage'    => '20',
    ],

    /*
     *--------------------------------------------------------------------------
     * User module
     *--------------------------------------------------------------------------
     *
     * Configuration for the user module.
     *
     */
    'user'             => [
        'model'        => 'App\User',
        'table'        => 'users',
        'primaryKey'   => 'id',
        'hidden'       => ['id', 'permissions', 'deleted_at', 'created_at', 'updated_at', 'reporting_to', 'password', 'remember_token', 'api_token', 'status'],
        'visible'      => [],
        'guarded'      => ['*'],
        'slugs'        => [],
        'dates'        => ['deleted_at'],
        'fillable'     => ['reporting_id', 'name', 'email', 'password', 'sex', 'dob', 'status', 'designation', 'api_token', 'mobile', 'phone',
            'address', 'permissions', 'street', 'city', 'district', 'state', 'country', 'web'],
        'listfields'   => ['id', 'reporting_id', 'name', 'email', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web'],
        'uploadfolder' => '/uploads/users',
        'uploadable'   => [
            'single'   => ['photo'],
            'multiple' => [],
        ],
        'casts'        => [
            'permissions' => 'array',
        ],
        'perPage'      => '20',
    ],

    /*
     *--------------------------------------------------------------------------
     * User module
     *--------------------------------------------------------------------------
     *
     * Configuration for the user module.
     *
     */
    'client'           => [
        'model'        => 'App\Client',
        'table'        => 'clients',
        'primaryKey'   => 'id',
        'hidden'       => ['id', 'permissions', 'deleted_at', 'created_at', 'updated_at', 'reporting_to', 'password', 'remember_token', 'api_token', 'status'],
        'visible'      => [],
        'guarded'      => ['*'],
        'slugs'        => [],
        'dates'        => ['deleted_at'],
        'fillable'     => ['reporting_id', 'name', 'email', 'password', 'sex', 'dob', 'status', 'designation', 'api_token', 'mobile', 'phone',
            'address', 'permissions', 'street', 'city', 'district', 'state', 'country', 'web'],
        'listfields'   => ['id', 'reporting_id', 'name', 'email', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web'],
        'uploadfolder' => '/uploads/users',
        'uploadable'   => [
            'single'   => ['photo'],
            'multiple' => [],
        ],
        'casts'        => [
            'permissions' => 'array',
        ],
        'perPage'      => '20',
    ],
];
