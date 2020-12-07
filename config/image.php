<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
     */

    'driver'    => 'gd',

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    |
    | {route}/{template}/{filename}
    |
    | Examples: "images", "img/cache"
    |
     */

    'route'     => 'image',

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited
    | by URI.
    |
    | Define as many directories as you like.
    |
     */

    'paths'     => [
        base_path(env('UPLOAD_FOLDER', 'storage/uploads')),
    ],

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation filter templates.
    | The keys of this array will define which templates
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    | The values of this array will define which filter class
    | will be applied, by its fully qualified name.
    |
     */

    'templates' => [
        'xs' => 'Litepie\Filer\Templates\ExtraSmall',
        'sm' => 'Litepie\Filer\Templates\Small',
        'md' => 'Litepie\Filer\Templates\Medium',
        'lg' => 'Litepie\Filer\Templates\Large',
        'xl' => 'Litepie\Filer\Templates\ExtraLarge',
    ],

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
     */

    'lifetime'  => 43200,

    // Image size
    'size'      => [
        'xs' => [
            'width'  => '80',
            'height' => '60',
            'action' => 'fit',
            // 'default'   => 'img/noimage.jpg',
            // 'watermark' => public_path('assets/img/watermark.png'),
        ],
        'sm' => [
            'width'  => '400',
            'height' => '300',
            'action' => 'fit',
            //'default'   => 'img/noimage.jpg',
            //'watermark' => public_path('assets/img/watermark.png'),
        ],
        'md' => [
            'width'  => '800',
            'height' => '600',
            'action' => 'fit',
            //'default'   => 'img/noimage.jpg',
            //'watermark' => public_path('assets/img/watermark.png'),
        ],
        'lg' => [
            'width'  => '1000',
            'height' => '750',
            'action' => 'fit',
            //'default'   => 'img/noimage.jpg',
            //'watermark' => public_path('assets/img/watermark.png'),
        ],
        'xl' => [
            'width'  => '2000',
            'height' => '1500',
            'action' => 'fit',
            //'default'   => 'img/noimage.jpg',
            //'watermark' => public_path('assets/img/watermark.png'),
        ],
    ],
];
