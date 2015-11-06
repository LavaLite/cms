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

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(trans('cms.name'));

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
            //You may use this event to set up your assets.

            //You may use this event to set up your assets.
            $theme->asset()->add('bootstrap', 'packages/bootstrap/css/bootstrap.min.css');
            $theme->asset()->usePath()->add('lavalite', 'css/theme.css');
            $theme->asset()->add('fontawsome', 'packages/font-awesome/css/font-awesome.min.css');
            $theme->asset()->add('swal', 'packages/sweetalert/css/sweetalert.css');
            $theme->asset()->add('jquery', 'packages/jquery/js/jquery.min.js');
            $theme->asset()->add('bootstrap', 'packages/bootstrap/js/bootstrap.min.js');
            $theme->asset()->add('summernote', 'packages/summernote/css/summernote.css');

            $theme->asset()->container('footer')->usePath()->add('lavalite', 'js/theme.js');
            $theme->asset()->container('footer')->add('swal', 'packages/sweetalert/js/sweetalert.min.js');
            $theme->asset()->container('footer')->add('moment', 'packages/moment/js/moment-with-locales.min.js');
            $theme->asset()->container('footer')->add('summernote', 'packages/summernote/js/summernote.min.js');
            $theme->asset()->container('footer')->add('datetimepicker', 'packages/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js');
            $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'blank' => function ($theme) {
            },

        ],

    ],

];
