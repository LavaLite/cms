<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litepie',

    /*
     * Package.
     */
    'package'   => 'menu',

    /*
     * Modules.
     */
    'modules'   => ['menu'],

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

    
    'menu'       => [
        'model'             => 'Litepie\Menu\Models\Menu',
        'table'             => 'menus',
        'hidden'            => [],
        'visible'           => [],
        'guarded'           => ['*'],
        'slugs'             => ['slug' => 'name'],
        'dates'             => ['deleted_at'],
        'appends'           => [],
        'fillable'          => ['user_id', 'parent_id',  'key',  'url',  'icon',  'permission',  'role',  'name',  'description',  'target',  'order',  'uload_folder'],
        'translate'         => ['parent_id',  'key',  'url',  'icon',  'permission',  'role',  'name',  'description',  'target',  'order',  'uload_folder'],
        'upload_folder'     => 'menu/menu',
        'uploads'           => [],
        'casts'         => [
            'role' => 'array',
        ],
        'revision'          => [],
        'perPage'           => '20',
        'search'        => [
            'name'  => 'like',
            'status',
        ],

    ],
];
