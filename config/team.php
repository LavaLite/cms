<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'app',

    /*
     * Package.
     */
    'package'   => 'team',

    /*
     * Modules.
     */
    'modules'   => ['team'],

    'team'       => [
        'model' => [
            'model' => \App\Models\Team::class,
            'repository' => \App\Repositories\Eloquent\TeamRepository::class,
            'table' => 'teams',
            'hidden'=> [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id',  'Name',  'description',  'settings',  'type',  'slug',  'status',  'created_by',  'created_at',  'updated_at',  'deleted_at'],
            'translatables' => [],
            'upload_folder' => 'team/team',
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
            'package' => 'Team',
            'module' => 'Team',
        ],
    ],
];
