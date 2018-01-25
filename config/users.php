<?php

return [

    /**
     * Provider.
     */
    'provider' => 'litepie',

    /*
     * Package.
     */
    'package'  => 'user',

    /*
     * Modules.
     */
    'modules'  => ['user', 'team', 'client', 'buyer'],
    /*
     * Additional user types other than user.
     */
    'types'    => ['client', 'buyer'],

    'policies' => [
        // Bind User policy
        \App\User::class                 => \Litepie\User\Policies\UserPolicy::class,
        \App\Client::class               => \Litepie\User\Policies\ClientPolicy::class,
        \App\Buyer::class                => \Litepie\User\Policies\ClientPolicy::class,
        // Bind Team policy
        \Litepie\User\Models\Team::class => \Litepie\User\Policies\TeamPolicy::class,
    ],

    /*
     * Modules.
     */
    'types'    => ['client', 'buyer'],

    'user'     => [
        'model' => [
            'model'         => \App\User::class,
            'table'         => 'users',
            'presenter'     => \Litepie\User\Repositories\Presenter\UserPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => [],
            'dates'         => ['deleted_at'],
            'appends'       => [],
            'fillable'      => ['user_id', 'name', 'email', 'parent_id', 'password', 'api_token', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'permissions'],
            'translate'     => [],

            'upload_folder' => 'user/user',
            'uploads'       => [
                'photo' => [
                    'count' => 1,
                    'type'  => 'image',
                ],
            ],
            'casts'         => [
                'permissions' => 'array',
                'photo'       => 'array',
            ],
            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name'        => 'like',
                'email'       => 'like',
                'sex'         => 'like',
                'dob'         => 'like',
                'designation' => 'like',
                'mobile'      => 'like',
                'street'      => 'like',
                'status'      => 'like',
                'created_at'  => 'like',
                'updated_at'  => 'like',
            ],
        ],

    ],

    'client'   => [
        'model'      => [
            'model'         => \App\Client::class,
            'table'         => 'clients',
            'presenter'     => \Litepie\User\Repositories\Presenter\ClientPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => ['slug' => 'name'],
            'dates'         => ['deleted_at', 'createdat', 'updated_at'],
            'appends'       => [],
            'fillable'      => ['id', 'name', 'email', 'password', 'api_token', 'remember_token', 'sex', 'dob', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'status', 'upload_folder', 'deleted_at', 'created_at', 'updated_at'],
            'translatables' => [],
            'upload_folder' => 'user/client',
            'uploads'       => [
                'photo' => [
                    'count' => 1,
                    'type'  => 'image',
                ],
            ],
            'casts'         => [
                'photo'       => 'array',
            ],

            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litepie',
            'package'  => 'Clients',
            'module'   => 'Client',
        ],

    ],

    'buyer'    => [
        'model'      => [
            'model'         => \App\Buyer::class,
            'table'         => 'buyers',
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => ['slug' => 'name'],
            'dates'         => ['deleted_at', 'createdat', 'updated_at'],
            'appends'       => [],
            'fillable'      => ['name', 'email', 'password', 'api_token', 'remember_token', 'sex', 'dob', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'status', 'upload_folder'],
            'translatables' => [],
            'upload_folder' => 'user/buyer',
            'uploads'       => [
                'photo' => [
                    'count' => 1,
                    'type'  => 'image',
                ],
            ],
            'casts'         => [
                'photo'       => 'array',
            ],

            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litepie',
            'package'  => 'Clients',
            'module'   => 'Buyer',
        ],

    ],

    'team'     => [
        'model' => [
            'model'         => \Litepie\User\Models\Team::class,
            'table'         => 'teams',
            'presenter'     => \Litepie\User\Repositories\Presenter\TeamItemPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => ['slug' => 'name'],
            'dates'         => ['deleted_at'],
            'appends'       => [],
            'fillable'      => ['user_id', 'name', 'description'],
            'translate'     => [],

            'upload-folder' => 'user/team',
            'uploads'       => [],
            'casts'         => [
            ],
            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name'        => 'like',
                'description' => 'like',
                'status'      => 'like',
                'created_at'  => 'like',
                'updated_at'  => 'like',
            ],
        ],
    ],
];
