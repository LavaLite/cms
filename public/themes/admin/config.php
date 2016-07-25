<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
     */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
     */

    'events'  => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before'             => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(trans('cms.name'));

        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme'  => function ($theme) {
            //You may use this event to set up your assets.

            //You may use this event to set up your assets.
            $theme->asset()->usePath()->add('styles', 'css/styles.css');
            $theme->asset()->usepath()->add('bootstrap', 'css/theme.css');
            $theme->asset()->usepath()->add('skin', 'css/skins/skin-red.css');

            $theme->asset()->add('jquery', 'packages/jquery/js/jquery.min.js');
            $theme->asset()->container('footer')->add('scripts', 'js/admin.js');
            $theme->asset()->container('footer')->usePath()->add('theme', 'js/theme.min.js');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

        ],
    ],

];
