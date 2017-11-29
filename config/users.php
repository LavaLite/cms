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
    'modules'  => ['user', 'team'],

    'image'    => [

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

    'user'     => [
        'model' => [
            'model'         => \App\User::class,
            'table'         => 'users',
            'presenter'     => \Litepie\User\Repositories\Presenter\UserItemPresenter::class,
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
        'model' => [
            'model'         => \App\Client::class,
            'table'         => 'clients',
            'presenter'     => \Litepie\User\Repositories\Presenter\UserItemPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => [],
            'dates'         => ['deleted_at'],
            'appends'       => [],
            'fillable'      => ['user_id', 'name', 'email', 'parent_id', 'password', 'api_token', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'permissions'],
            'translate'     => [],

            'upload_folder' => 'client/client',
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
