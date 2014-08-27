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
            $theme->setTitle(Lang::get('app.name'));

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




            $theme->asset()->add('jqueryui',                    '/vendor/jquery.ui/themes/base/core.css');
            $theme->asset()->add('animate',                     '/vendor/animate.css/animate.css');
            $theme->asset()->add('bootstrap',                   '/vendor/bootstrap/dist/css/bootstrap.css');
            $theme->asset()->add('font-awesome',                '/vendor/font-awesome/css/font-awesome.min.css');
            $theme->asset()->add('bootstrap-datetimepicker',    '/vendor/bootstrap3-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
            $theme->asset()->add('bootstrap-tagsinput',         '/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css');
            $theme->asset()->add('ezdz',                        '/vendor/ezdz/dist/jquery.ezdz.min.css');
            $theme->asset()->add('icheck',                      '/vendor/iCheck/skins/minimal/blue.css');
            $theme->asset()->add('ionicons',                    '/vendor/ionicons/css/ionicons.css');
            $theme->asset()->add('summernote',                  '/vendor/summernote/dist/summernote.css');
            $theme->asset()->add('CaptionHoverEffects',         '/vendor/CaptionHoverEffects/css/component.css');





            $theme->asset()->usePath()->add('override', 'css/override.css');
            $theme->asset()->usePath()->add('styles',   'css/styles.css');
            $theme->asset()->usePath()->add('lavalite', 'css/lavalite.css');
            $theme->asset()->add('switch',                      '/vendor/switchery/dist/switchery.min.css');

            $theme->asset()->add('jquery',              '/vendor/jquery/dist/jquery.min.js');

            $theme->asset()->container('footer')->add('jqueryui',                   '/vendor/jquery.ui/ui/core.js');
            $theme->asset()->container('footer')->add('bootstrap',                  '/vendor/bootstrap/dist/js/bootstrap.js');
            $theme->asset()->container('footer')->add('moment',                     '/vendor/moment/min/moment.min.js');
            $theme->asset()->container('footer')->add('bootstrap-datetimepicker',   '/vendor/bootstrap3-datetimepicker/build/js/bootstrap-datetimepicker.min.js');
            $theme->asset()->container('footer')->add('switch',                     '/vendor/switchery/dist/switchery.min.js');
            $theme->asset()->container('footer')->add('bootstrap-tagsinput',        '/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js');
            $theme->asset()->container('footer')->add('ezdz',                       '/vendor/ezdz/dist/jquery.ezdz.min.js');
            $theme->asset()->container('footer')->add('iCheck',                     '/vendor/iCheck/icheck.min.js');
            $theme->asset()->container('footer')->add('summernote',                 '/vendor/summernote/dist/summernote.min.js');
            $theme->asset()->container('footer')->add('CaptionHoverEffectsmod',     '/vendor/CaptionHoverEffects/js/modernizr.custom.js');
            $theme->asset()->container('footer')->add('CaptionHoverEffects',        '/vendor/CaptionHoverEffects/js/toucheffects.js');
            $theme->asset()->container('footer')->add('googlemap',                  'http://maps.google.com/maps/api/js?sensor=false');



            $theme->asset()->container('footer')->usePath()->add('scripts',         'js/scripts.js');
            $theme->asset()->container('footer')->usePath()->add('lavalite',        'js/lavalite.js');
            $theme->asset()->container('footer')->usePath()->add('restfulizer',     'js/restfulizer.js');

        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'blank' => function($theme)
            {
                $theme->asset()->add('bootstrap',                   '/vendor/bootstrap/dist/css/bootstrap.css');

                $theme->asset()->usePath()->add('override', 'css/override.css');
                $theme->asset()->usePath()->add('styles',   'css/styles.css');
                $theme->asset()->usePath()->add('lavalite', 'css/lavalite.css');

                $theme->asset()->add('jquery',              '/vendor/jquery/dist/jquery.min.js');

                $theme->asset()->container('footer')->add('bootstrap',                  '/vendor/bootstrap/dist/js/bootstrap.js');
            }

        )

    )

);