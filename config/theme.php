<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Themes
    |--------------------------------------------------------------------------
    |
    | Themes used for the website.
    | eg. admin, public, user etc.
    |
     */

    'themes'        => [
        'default' => [
            'theme'  => 'default',
            'view'   => 'default',
        ],
        'admin'   => [
            'theme'  => 'default',
            'view'   => 'default',
        ],
        'public'  => [
            'theme'  => 'public',
            'view'   => 'public',
        ],
        'user'    => [
            'theme'  => 'user',
            'view'   => 'user',
        ],
        'client'    => [
            'theme'  => 'user',
            'view'   => 'user',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset url path
    |--------------------------------------------------------------------------
    |
    | The path to asset, this config can be cdn host.
    | eg. http://cdn.domain.com
    |
     */

    'assetUrl'      => '',

    /*
    |--------------------------------------------------------------------------
    | Theme Default
    |--------------------------------------------------------------------------
    |
    | If you don't set a theme when using a "Theme" class the default theme
    | will replace automatically.
    |
     */

    'themeDefault'  => 'default',

    /*
    |--------------------------------------------------------------------------
    | Layout Default
    |--------------------------------------------------------------------------
    |
    | If you don't set a layout when using a "Theme" class the default layout
    | will replace automatically.
    |
     */

    'layoutDefault' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Path to lookup theme
    |--------------------------------------------------------------------------
    |
    | The root path contains themes collections.
    |
     */

    'themeDir'      => 'themes',

    /*
    |--------------------------------------------------------------------------
    | A pieces of theme collections
    |--------------------------------------------------------------------------
    |
    | Inside a theme path we need to set up directories to
    | keep "layouts", "assets" and "partials".
    |
     */

    'containerDir'  => [
        'layout'  => 'layouts',
        'asset'   => 'assets',
        'partial' => 'partials',
        'widget'  => 'widgets',
        'view'    => 'views',
    ],
];
