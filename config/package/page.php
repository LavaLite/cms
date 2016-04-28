<?php

return [

/*
 * Provider .
 */
    'provider' => 'lavalite',

/*
 * Package .
 */
    'package'  => 'page',

/*
 * Modules .
 */
    'modules'  => ['page', 'category'],

/*
 * Compilers .
 */
    'compiler' => ['none' => 'None', 'php' => 'Php', 'blade' => 'Blade', 'twig' => 'Twig'],

/*
 * Views for the page  .
 */
    'views'    => ['page' => 'Default', 'left' => 'Left side menu'],

    'image'    => [
        'xs' => ['width' => '60', 'height' => '45', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
        'sm' => ['width' => '160', 'height' => '75', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
        'md' => ['width' => '460', 'height' => '345', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
        'lg' => ['width' => '800', 'height' => '600', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
        'xl' => ['width' => '1000', 'height' => '750', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
    ],

// Modale variables for page module.
    'page'     => [
        'model'        => 'Lavalite\Page\Models\Page',
        'table'        => 'pages',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        'slugs'        => ['slug' => 'name'],
        'dates'        => ['deleted_at'],
        'appends'      => ['eid'],
        'fillable'     => ['heading', 'title', 'name', 'slug', 'order', 'view', 'compiler', 'status', 'upload_folder', 'content', 'keyword', 'description', 'abstract'],
        'listfields'   => ['id', 'name', 'category_id', 'slug', 'order', 'status', 'heading', 'title', 'abstract', 'compiler', 'view'],
        'translate'    => ['name', 'heading', 'content', 'title', 'keyword', 'description'],
        'uploadfolder' => '/uploads/page',
        'uploads'      => [
            'single'   => ['banner'],
            'multiple' => ['images'],
        ],
        'casts'        => [
            'banner' => 'array',
            'images' => 'array',
        ],
        'encrypt'      => ['id'],
        'revision'     => ['name', 'title'],
        'perPage'      => '20',
    ],
];
