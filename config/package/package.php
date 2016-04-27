<?php

return [

    /**
     * Provider.
     */
    'provider' => 'lavalite',

    /*
     * Package.
     */
    'package'  => 'package',

    /*
     * Modules.
     */
    'modules'  => ['module'],

    'module'   => [
        'model'         => 'Lavalite\Package\Models\Module',
        'table'         => 'modules',
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'name'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'name', 'email', 'color', 'date', 'datetime', 'file', 'files', 'image', 'images', 'month', 'password', 'range', 'search', 'tel', 'time', 'url', 'week', 'date_picker', 'time_picker', 'date_time_picker', 'radios', 'checkboxes', 'switch', 'select', 'model_select', 'tinyints', 'smallints', 'mediumints', 'ints', 'bigints', 'decimals', 'floats', 'doubles', 'reals', 'bits', 'booleans', 'datetimes', 'timestamps', 'times', 'years', 'chars', 'varchars', 'tinytexts', 'texts', 'mediumtexts', 'longtexts', 'binarys', 'varbinarys', 'tinyblobs', 'mediumblobs', 'blobs', 'longblobs', 'enums', 'sets'],
        'translatable'  => ['name', 'email', 'color', 'date', 'datetime', 'file', 'files', 'image', 'images', 'month', 'password', 'range', 'search', 'tel', 'time', 'url', 'week', 'date_picker', 'time_picker', 'date_time_picker', 'radios', 'checkboxes', 'switch', 'select', 'model_select', 'tinyints', 'smallints', 'mediumints', 'ints', 'bigints', 'decimals', 'floats', 'doubles', 'reals', 'bits', 'booleans', 'datetimes', 'timestamps', 'times', 'years', 'chars', 'varchars', 'tinytexts', 'texts', 'mediumtexts', 'longtexts', 'binarys', 'varbinarys', 'tinyblobs', 'mediumblobs', 'blobs', 'longblobs', 'enums', 'sets'],

        'upload-folder' => '/uploads/package/module',
        'uploads'       => [
            'single'   => [],
            'multiple' => [],
        ],
        'casts'         => [
            'file'       => 'array',
            'files'      => 'array',
            'image'      => 'array',
            'images'     => 'array',
            'checkboxes' => 'array',
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name'  => 'like',
            'email' => 'like',
            'status',
        ],
    ],
];
