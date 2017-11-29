<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litepie',

    /*
     * Package.
     */
    'package'   => 'roles',

    /*
     * Modules.
     */
    'modules'   => ['role', 'permission'],

    'role'       => [
        'model' => [
            'model'                 => \Litepie\Roles\Models\Role::class,
            'table'                 => 'roles',
            'presenter'             => \Litepie\Roles\Repositories\Presenter\RoleItemPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at'],
            'appends'               => [],
            'fillable'              => ['name',  'slug',  'description',  'level'],
            'translatables'         => [],
            'upload_folder'         => 'roles/role',
            'uploads'               => [],
            'casts'                 => [],
            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepie',
            'package'   => 'Roles',
            'module'    => 'Role',
        ],

    ],

    'permission'       => [
        'model' => [
            'model'                 => \Litepie\Roles\Models\Permission::class,
            'table'                 => 'permissions',
            'presenter'             => \Litepie\Roles\Repositories\Presenter\PermissionItemPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at'],
            'appends'               => [],
            'fillable'              => ['name',  'slug',  'description'],
            'translatables'         => [],
            'upload_folder'         => 'roles/permission',
            'uploads'               => [],
            'casts'                 => [],
            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepie',
            'package'   => 'Roles',
            'module'    => 'Permission',
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
        'enabled' => false,
        'options' => [
            'is'      => true,
            'can'     => true,
            'allowed' => true,
        ],
    ],

];
