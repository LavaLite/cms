<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'app',

    /*
     * Package.
     */
    'package'   => 'role',

    /*
     * Modules.
     */
    'modules'   => ['role', 'permission'],

    'role'       => [
        'model' => [
            'model' => \App\Models\Role::class,
            'repository' => \App\Repositories\Eloquent\RoleRepository::class,
            'table' => 'roles',
            'hidden'=> [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id',  'name',  'slug',  'description',  'level',  'deleted_at',  'created_at',  'updated_at'],
            'translatables' => [],
            'upload_folder' => 'role/role',
            'uploads' => [
                /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts' => [
                /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision' => [],
            'perPage' => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'App',
            'package' => 'Role',
            'module' => 'Role',
        ],
    ],
    'permission'       => [
        'model' => [
            'model' => \App\Models\Permission::class,
            'repository' => \App\Repositories\Eloquent\PermissionRepository::class,
            'table' => 'permissions',
            'hidden'=> [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id',  'name',  'slug',  'description',  'deleted_at',  'created_at',  'updated_at'],
            'translatables' => [],
            'upload_folder' => 'role/permission',
            'uploads' => [
                /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts' => [
                /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision' => [],
            'perPage' => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'App',
            'package' => 'Role',
            'module' => 'Permission',
        ],
    ],
];
