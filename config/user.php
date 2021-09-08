<?php

return [

    /**
     * Provider.
     */
    'provider' => 'litepie',

    /*
     * Package.
     */
    'package' => 'users',

    /*
     * Modules.
     */
    'modules' => ['user', 'client'],

    'user' => [
        'model' => [
            'model' => \App\Models\User::class,
            'repository' => \App\Repositories\Eloquent\UserRepository::class,
            'table' => 'users',
            'hidden' => [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id', 'reporting_to', 'team_id', 'name', 'email', 'password', 'api_token', 'remember_token', 'sex', 'dob', 'doj', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'urls', 'status', 'email_verified_at', 'user_id', 'user_type', 'upload_folder', 'deleted_at', 'created_at', 'updated_at'],
            'translatables' => [],
            'upload_folder' => 'users/user',
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
            'search' => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litepie',
            'package' => 'Users',
            'module' => 'User',
        ],
    ],
    'client' => [
        'model' => [
            'model' => \App\Models\Client::class,
            'repository' => \App\Repositories\Eloquent\ClientRepository::class,
            'table' => 'clients',
            'hidden' => [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id', 'reporting_to', 'name', 'email', 'password', 'api_token', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'permissions', 'status', 'email_verified_at', 'user_id', 'user_type', 'upload_folder', 'deleted_at', 'created_at', 'updated_at'],
            'translatables' => [],
            'upload_folder' => 'users/client',
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
            'search' => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litepie',
            'package' => 'Users',
            'module' => 'Client',
        ],
    ],
];
