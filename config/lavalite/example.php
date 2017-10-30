<?php

return [

    /**
     * Provider.
     */
    'provider' => 'lavalite',

    /*
     * Package.
     */
    'package'  => 'example',

    /*
     * Modules.
     */
    'modules'  => ['example'],

    'image'    => [

        'sm' => [
            'width'     => '140',
            'height'    => '140',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'md' => [
            'width'     => '370',
            'height'    => '420',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'lg' => [
            'width'     => '780',
            'height'    => '497',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        'xl' => [
            'width'     => '800',
            'height'    => '530',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

    ],

    'example'  => [
        'model'      => [
            'model'         => \Lavalite\Example\Models\Example::class,
            'table'         => 'examples',
            'presenter'     => \Lavalite\Example\Repositories\Presenter\ExampleItemPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => ['slug' => 'name'],
            'dates'         => ['deleted_at'],
            'appends'       => [],
            'fillable'      => ['user_id', 'name', 'email', 'color', 'date', 'datetime', 'file', 'files', 'image', 'images', 'month', 'password', 'range', 'search', 'tel', 'time', 'url', 'week', 'date_picker', 'time_picker', 'date_time_picker', 'radios', 'checkboxes', 'switch', 'select', 'model_select', 'tinyints', 'smallints', 'mediumints', 'ints', 'bigints', 'decimals', 'floats', 'doubles', 'reals', 'bits', 'booleans', 'dates', 'datetimes', 'timestamps', 'times', 'years', 'chars', 'varchars', 'tinytexts', 'texts', 'mediumtexts', 'longtexts', 'binarys', 'varbinarys', 'tinyblobs', 'mediumblobs', 'blobs', 'longblobs', 'enums', 'sets', 'user_id', 'user_type'],
            'translate'     => ['name', 'email', 'color', 'date', 'datetime', 'file', 'files', 'image', 'images', 'month', 'password', 'range', 'search', 'tel', 'time', 'url', 'week', 'date_picker', 'time_picker', 'date_time_picker', 'radios', 'checkboxes', 'switch', 'select', 'model_select', 'tinyints', 'smallints', 'mediumints', 'ints', 'bigints', 'decimals', 'floats', 'doubles', 'reals', 'bits', 'booleans', 'dates', 'datetimes', 'timestamps', 'times', 'years', 'chars', 'varchars', 'tinytexts', 'texts', 'mediumtexts', 'longtexts', 'binarys', 'varbinarys', 'tinyblobs', 'mediumblobs', 'blobs', 'longblobs', 'enums', 'sets'],
            'upload_folder' => 'example/example',
            'uploads'       => [],
            'casts'         => [],
            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'lavalite',
            'package'  => 'example',
            'module'   => 'example',
            'model'    => 'example',
        ],

        'workflow'   => [
            'points' => [
                'start' => 'draft',
                'end'   => ['delete'],
            ],
            'steps'  => [
                'draft'     => [
                    'label'  => "Example created",
                    'action' => ['setStatus', 'draft'],
                    'next'   => ['complete'],
                ],
                'complete'  => [
                    'label'  => "Example completed",
                    'status' => ['setStatus', 'complete'],
                    'next'   => ['verify'],
                ],
                'verify'    => [
                    'label'  => "Example verified",
                    'action' => ['setStatus', 'verify'],
                    'next'   => ['approve'],
                ],
                'approve'   => [
                    'label'  => "Example approved",
                    'action' => ['setStatus', 'approve'],
                    'next'   => ['publish'],
                ],
                'publish'   => [
                    'label'  => "Example published",
                    'action' => ['setStatus', 'publish'],
                    'next'   => ['unpublish', 'delete', 'target', 'archive'],
                ],
                'unpublish' => [
                    'label'  => "Example unpublished",
                    'action' => ['setStatus', 'unpublish'],
                    'next'   => ['publish', 'target', 'archive', 'delete'],
                ],
                'archive'   => [
                    'label'  => "Example archived",
                    'action' => ['setStatus', 'archive'],
                    'next'   => ['publish', 'delete'],
                ],
                'delete'    => [
                    'Label'  => "Example deleted",
                    'status' => ['delete', 'archive'],
                ],
            ],
        ],

    ],
];
