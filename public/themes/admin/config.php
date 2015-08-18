<?php

return array(

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

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
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
        'beforeRenderTheme' => function($theme)
        {
            //You may use this event to set up your assets.
            $theme->asset()->add('bootstrap',               'css/bootstrap.min.css');
            $theme->asset()->usePath()->add('lavalite',     'css/lavalite.css');
            $theme->asset()->usePath()->add('skins',        'css/skins/_all-skins.min.css');
            $theme->asset()->add('fontawsome',              'css/font-awesome.min.css');

            $theme->asset()->add('jquery',                  'js/jquery.min.js');
            $theme->asset()->add('bootstrap',               'js/bootstrap.min.js');

            $theme->asset()->usePath()->add('lavalite',     'js/lavalite.min.js');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'blank' => function($theme)
            {
                $theme->asset()->add('icheck',              'css/icheck/square/blue.css');
                $theme->asset()->add('icheck',              'js/icheck.min.js');
            },

            'default' => function($theme)
            {
                $theme->asset()->add('dataTables',              'css/jquery.dataTables.min.css');
                $theme->asset()->add('summernote',              'css/summernote.css');
                $theme->asset()->add('toastr',                  'css/toastr.min.css');
                $theme->asset()->add('dropzone',                'css/dropzone.min.css');
                $theme->asset()->add('icheck',                  'css/icheck/square/blue.css');
                $theme->asset()->add('smoke',                   'css/smoke.css');
                $theme->asset()->usePath()->add('styles',       'css/styles.css');

                $theme->asset()->container('footer')->add('icheck',                  'js/icheck.min.js');
                $theme->asset()->container('footer')->add('dataTables',              'js/jquery.dataTables.min.js');
                $theme->asset()->container('footer')->add('dataTablesbootstrap',     'js/dataTables.bootstrap.js');
                $theme->asset()->container('footer')->add('summernote',              'js/summernote.min.js');
                $theme->asset()->container('footer')->add('dropzone',                'js/dropzone.min.js');
                $theme->asset()->container('footer')->add('moment',                  'js/moment-with-locales.min.js');
                $theme->asset()->container('footer')->add('datetimepicker',          'js/bootstrap-datetimepicker.js');
                $theme->asset()->container('footer')->add('nestable',                'js/jquery.nestable.js');
                $theme->asset()->container('footer')->add('validate',                'js/jquery.validate.min.js');
                $theme->asset()->container('footer')->add('toastr',                  'js/toastr.min.js');
                $theme->asset()->container('footer')->add('sortable',                'js/sortable.min.js');
                $theme->asset()->container('footer')->add('smoke',                   'js/smoke.min.js');
                $theme->asset()->container('footer')->add('scripts',                 'js/scripts.js');
            },

            'page' => function($theme)
            {
                $theme->asset()->add('dataTables',              'css/jquery.dataTables.min.css');
                $theme->asset()->add('summernote',              'css/summernote.css');
                $theme->asset()->add('toastr',                  'css/toastr.min.css');
                $theme->asset()->add('dropzone',                'css/dropzone.min.css');

                $theme->asset()->add('icheck',                  'css/icheck/square/blue.css');

                $theme->asset()->container('footer')->add('icheck',                  'js/icheck.min.js');
                $theme->asset()->container('footer')->add('dataTables',              'js/jquery.dataTables.min.js');
                $theme->asset()->container('footer')->add('dataTablesbootstrap',     'js/dataTables.bootstrap.js');
                $theme->asset()->container('footer')->add('summernote',              'js/summernote.min.js');
                $theme->asset()->container('footer')->add('dropzone',                'js/dropzone.min.js');
                $theme->asset()->container('footer')->add('moment',                  'js/moment-with-locales.min.js');
                $theme->asset()->container('footer')->add('datetimepicker',          'js/bootstrap-datetimepicker.js');
                $theme->asset()->container('footer')->add('validate',                'js/jquery.validate.min.js');
                $theme->asset()->container('footer')->add('nestable',                'js/jquery.nestable.min.js');
                $theme->asset()->container('footer')->add('toastr',                  'js/toastr.min.js');
                $theme->asset()->container('footer')->add('sortable',                'js/sortable.min.js');
                $theme->asset()->container('footer')->add('scripts',                 'js/scripts.js');
            })

        )

);