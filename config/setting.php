<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'app',

    /*
     * Package.
     */
    'package'   => 'settings',

    /*
     * Modules.
     */
    'modules'   => ['setting'],

    'setting'       => [
        'model' => [
            'model' => \App\Models\Setting::class,
            'repository' => \App\Repositories\Eloquent\SettingRepository::class,
            'table' => 'settings',
            'hidden'=> [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id',  'key',  'package',  'module',  'name',  'value',  'file',  'control',  'type',  'slug',  'user_id',  'user_type',  'upload_folder',  'deleted_at',  'created_at',  'updated_at'],
            'translatables' => [],
            'upload_folder' => 'settings/setting',
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
            'package' => 'Settings',
            'module' => 'Setting',
        ],
    ],
];
