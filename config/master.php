<?php

return [

    /**
     * Provider.
     */
    'provider' => 'app',

    /*
     * Package.
     */
    'package' => 'master',

    /*
     * Modules.
     */
    'modules' => ['master'],

    /**
     * Type of masters used in the project.
     */
    'masters' => [
        'single' => [
            'group' => 'master',
            'type' => 'single',
            'fields' => ['icon', 'amount', 'image'],
        ],
        'category' => [
            'group' => 'master',
            'type' => 'category',
            'fields' => ['parent_id'],
        ],
        'image' => [
            'group' => 'master',
            'type' => 'image',
            'fields' => ['image'],
        ],
        'icon' => [
            'group' => 'master',
            'type' => 'icon',
            'fields' => ['icon'],
        ],
        'project' => [
            'view' => 'project.default',
            'type' => 'project',
            'group' => 'project',
        ],
    ],

    /**
     * Type of masters used in the project.
     */
    'groups' => [
        'default',
    ],

    'master' => [
        'model' => [
            'model' => \App\Models\Master::class,
            'repository' => \App\Repositories\Eloquent\MasterRepository::class,
            'table' => 'masters',
            'hidden' => [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => [
                'id', 'parent_id', 'type', 'name', 'code', 'amount', 'abbr', 'description', 'icon',
                'image', 'images', 'file', 'order', 'status', 'extras', 'slug', 'deleted_at', 'created_at', 'updated_at',
            ],
            'translatables' => [],
            'upload_folder' => 'masters',
            'uploads' => [
                'image' => [
                    'count' => 10,
                    'type' => 'image',
                ],
            ],

            'casts' => [

                'image' => 'array',
            ],

            'revision' => [],
            'perPage' => '20',
            'search' => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'App',
            'package' => 'Master',
            'module' => 'Master',
        ],
    ],
];
