<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'package',

/*
* Modules .
*/
'modules'   => ['module'],

'image'         => [
    'xs'        => ['width' => '60',         'height' => '45'],
    'sm'        => ['width' => '100',        'height' => '75'],
    'md'        => ['width' => '460',        'height' => '345'],
    'lg'        => ['width' => '800',        'height' => '600'],
    'xl'        => ['width' => '1000',       'height' => '750'],
    ],

'module' => [
                    'model'             => 'Lavalite\Package\Models\Module',
                    'table'             => 'modules',
                    'hidden'            => [],
                    'visible'           => [],
                    'guarded'           => ['*'],
                    'slugs'             => ['slug' => 'name'],
                    'dates'             => ['deleted_at'],
                    'appends'           => [],

                    'fillable'          => ['user_id', 'name',  'email',  'color',  'date',  'datetime',  'file',  'files',  'image',  'images',  'month',  'password',  'range',  'search',  'tel',  'time',  'url',  'week',  'date_picker',  'time_picker',  'date_time_picker',  'radios',  'checkboxes',  'switch',  'select',  'model_select',  'tinyints',  'smallints',  'mediumints',  'ints',  'bigints',  'decimals',  'floats',  'doubles',  'reals',  'bits',  'booleans',  'datetimes',  'timestamps',  'times',  'years',  'chars',  'varchars',  'tinytexts',  'texts',  'mediumtexts',  'longtexts',  'binarys',  'varbinarys',  'tinyblobs',  'mediumblobs',  'blobs',  'longblobs',  'enums',  'sets'],
                    'translatable'      => ['name',  'email',  'color',  'date',  'datetime',  'file',  'files',  'image',  'images',  'month',  'password',  'range',  'search',  'tel',  'time',  'url',  'week',  'date_picker',  'time_picker',  'date_time_picker',  'radios',  'checkboxes',  'switch',  'select',  'model_select',  'tinyints',  'smallints',  'mediumints',  'ints',  'bigints',  'decimals',  'floats',  'doubles',  'reals',  'bits',  'booleans',  'dates',  'datetimes',  'timestamps',  'times',  'years',  'chars',  'varchars',  'tinytexts',  'texts',  'mediumtexts',  'longtexts',  'binarys',  'varbinarys',  'tinyblobs',  'mediumblobs',  'blobs',  'longblobs',  'enums',  'sets'],

                    'upload-folder'     => '/uploads/package/module',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                    'casts'             => [
                                            'files'  => 'array',
                                            'images' => 'array',
                                            ],
                    'revision'          => [],
                    'perPage'           => '20',
                ],
];
