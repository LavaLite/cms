<?php

return [

    /**
     * Provider.
     */
    'provider'   => 'litepie',

    /*
     * Package.
     */
    'package'    => 'user',

    /*
     * Modules.
     */
    'modules'    => ['user', 'permission', 'role', 'team'],

    'image'      => [

        'sm'     => [
            'width'     => '140',
            'height'    => '140',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'md'     => [
            'width'     => '370',
            'height'    => '420',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'lg'     => [
            'width'     => '780',
            'height'    => '497',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        'xl'     => [
            'width'     => '800',
            'height'    => '530',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        'avatar' => [
            'male'   => '',
            'female' => '',
        ],
    ],

    'permission' => [
        'model' => [
            'model'         => \Litepie\Roles\Models\Permission::class,
            'table'         => 'permissions',
            'presenter'     => \Litepie\Roles\Repositories\Presenter\PermissionItemPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => ['slug' => 'name'],
            'dates'         => ['deleted_at'],
            'appends'       => [],
            'fillable'      => ['slug', 'name'],
            'translate'     => [],
            'upload-folder' => 'user/permission',
            'uploads'       => [],
            'casts'         => [],
            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name' => 'like',
                'status',
            ],
        ],
    ],

    'role'       => [
        'model' => [
            'model'         => \Litepie\Roles\Models\Role::class,
            'table'         => 'roles',
            'presenter'     => \Litepie\Roles\Repositories\Presenter\RoleItemPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => [],
            'dates'         => ['deleted_at'],
            'appends'       => [],
            'fillable'      => ['key', 'name', 'permissions'],
            'translate'     => [],

            'upload-folder' => 'user/role',
            'uploads'       => [],
            'casts'         => [
                'permissions' => 'array',
            ],
            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name'       => 'like',
                'key'        => 'like',
                'created_at' => 'like',
                'updated_at' => 'like',
            ],
        ],

    ],
    /*
    |--------------------------------------------------------------------------
    | Slug Separator
    |--------------------------------------------------------------------------
    |
    | Here you can change the slug separator. This is very important in matter
    | of magic method __call() and also a `Slugable` trait. The default value
    | is a dot.
    |
     */
    'separator'  => '.',

    /*
    |--------------------------------------------------------------------------
    | Roles, Permissions and Allowed "Pretend"
    |--------------------------------------------------------------------------
    |
    | You can pretend or simulate package behavior no matter what is in your
    | database. It is really useful when you are testing you application.
    | Set up what will methods is(), can() and allowed() return.
    |
     */
    'pretend'    => [
        'enabled' => true,
        'options' => [
            'is'      => true,
            'can'     => true,
            'allowed' => true,
        ],
    ],

];
