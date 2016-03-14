<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package modules
    |--------------------------------------------------------------------------
    |
    | Here is the modules included in this package which can be used in this package.
    |
    */
    'modules'       => ['user', 'role', 'permission'],

    /*
    |--------------------------------------------------------------------------
    | User's roles on public side
    |--------------------------------------------------------------------------
    |
    | This array contains the roles which a user can be assigned while creating a
    | user form public side, donot include admin or superuser  role in thia array.
    |
    */
    'roles'         => ['user'],

    /*
    |--------------------------------------------------------------------------
    | User's default role
    |--------------------------------------------------------------------------
    |
    | Deafult role for a user if it is not specifyed explicitly.
    |
    */
    'default_roles' => ['user'],

    /*
    |--------------------------------------------------------------------------
    | Superuser role
    |--------------------------------------------------------------------------
    |
    | Super user role name for a user, a super user can perform all functionalities
    | on the website.
    |
    */
    'superuser_role' => 'superuser',

    /*
    |--------------------------------------------------------------------------
    | Image sizes
    |--------------------------------------------------------------------------
    |
    | Size of image which can be used in this package.
    |
    */
    'image'         => [
                        'xs'        => ['width' => '60',     'height' => '45'],
                        'sm'        => ['width' => '100',    'height' => '75'],
                        'md'        => ['width' => '460',    'height' => '345'],
                        'lg'        => ['width' => '800',    'height' => '600'],
                        'xl'        => ['width' => '1000',   'height' => '750'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Permission module
    |--------------------------------------------------------------------------
    |
    | Configuration for the permission module.
    |
    */
    'permission'    => [
                        'model'         => 'Litepie\User\Models\Permission',
                        'table'         => 'permissions',
                        'primaryKey'    => 'id',
                        'hidden'        => [],
                        'visible'       => [],
                        'guarded'       => ['*'],
                        'slugs'         => ['slug' => 'name'],
                        'dates'         => ['deleted_at'],
                        'appends'       => [''],
                        'fillable'      => ['name', 'slug'],
                        'listfields'    => ['name', 'slug'],
                        'translate'     => [],
                        'perPage'       => '20',

                    ],
    /*
    |--------------------------------------------------------------------------
    | Role module
    |--------------------------------------------------------------------------
    |
    | Configuration for the role module.
    |
    */
    'role'       => [
                        'model'         => 'Litepie\User\Models\Role',
                        'table'         => 'roles',
                        'primaryKey'    => 'id',
                        'hidden'        => [],
                        'visible'       => [],
                        'guarded'       => ['*'],
                        'slugs'         => [],
                        'dates'         => ['deleted_at'],
                        'appends'       => [''],
                        'fillable'      => ['name', 'permissions'],
                        'listfields'    => ['name'],
                        'casts'         => [
                                            'permissions'   => 'array',
                                           ],
                        'translate'     => ['name'],
                        'perPage'       => '20',
                ],

    /*
    |--------------------------------------------------------------------------
    | User module
    |--------------------------------------------------------------------------
    |
    | Configuration for the user module.
    |
    */
    'user'      => [
                        'model'         => 'App\User',
                        'table'         => 'users',
                        'primaryKey'    => 'id',
                        'hidden'        => ['password', 'remember_token'],
                        'visible'       => [],
                        'guarded'       => ['*'],
                        'slugs'         => [],
                        'dates'         => ['deleted_at'],
                        'appends'       => ['eid'],
                        'fillable'      => ['reporting_id', 'name', 'email', 'sex', 'dob', 'designation', 'mobile', 'phone',
                                            'address', 'permissions', 'street', 'city', 'district', 'state', 'country', 'web', ],
                        'listfields'    => ['id', 'reporting_id', 'name', 'email', 'sex', 'dob', 'designation', 'mobile', 'phone',
                                            'address', 'street', 'city', 'district', 'state', 'country', 'web', ],
                        'uploadfolder'  => '/uploads/users',
                        'uploadable'    => [
                                                'single'   => ['photo'],
                                                'multiple' => [],
                                            ],
                        'casts'         => [
                                            'permissions'   => 'array',
                                           ],
                        'perPage'       => '20',
                ],

    /*
    |--------------------------------------------------------------------------
    | Social login module
    |--------------------------------------------------------------------------
    |
    | Configuration for the social login module.
    |
    */
    'user_social'       => [
                        'model'         => 'Litepie\User\Models\UserSocial',
                        'table'         => 'user_social',
                        'primaryKey'    => 'id',
                        'hidden'        => [],
                        'visible'       => [],
                        'guarded'       => ['*'],
                        'slugs'         => [],
                        'dates'         => ['deleted_at'],
                        'appends'       => ['eid'],
                        'fillable'      => ['user_id', 'provider', 'provider_id'],
                        'listfields'    => ['id', 'user_id', 'provider', 'provider_id'],
                        'casts'         => [
                                            'permissions'   => 'array',
                                           ],
                        'translate'     => [],
                        'perPage'       => '20',
                ],
];
