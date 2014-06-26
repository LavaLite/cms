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
            $theme->setTitle('Welcome to demo site');

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
        // this event should call to awebsites/zover/cms/publicssign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {

             $theme->asset()->add('bootstrap', '/vendor/bootswatch/united/bootstrap.min.css');
<<<<<<< HEAD
               $theme->asset()->add('jquery', '/vendor/jquery/dist/jquery.min.js');
             $theme->asset()->add('font-awesome', '/vendor/font-awesome/css/font-awesome.min.css');
             $theme->asset()->add('datetimepicker', '/vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
      

             $theme->asset()->usePath()->add('override', 'css/override.css');
             $theme->asset()->usePath()->add('styles', 'css/styles.css');
             $theme->asset()->usePath()->add('narrow', 'css/jumbotron-narrow.css');
             $theme->asset()->add('nivo', '/vendor/sample-banner/nivo-slider.css');
           
=======
             $theme->asset()->add('jquery', '/vendor/jquery/dist/jquery.min.js');
             $theme->asset()->add('font-awesome', '/vendor/font-awesome/css/font-awesome.min.css');
             $theme->asset()->add('datetimepicker', '/vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');


             $theme->asset()->usePath()->add('override', 'css/override.css');
             $theme->asset()->usePath()->add('styles', 'css/styles.css');
             $theme->asset()->add('nivo', '/vendor/sample-banner/nivo-slider.css');

>>>>>>> dev
             $theme->asset()->container('footer')->add('bootstrap', '/vendor/bootstrap/dist/js/bootstrap.min.js', array('jquery'));
             $theme->asset()->container('footer')->add('datetimepicker', '/vendor/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', array('jquery'));
             $theme->asset()->container('footer')->add('nivo', '/vendor/sample-banner/jquery.nivo.slider.pack.js', array('jquery'));

             $theme->asset()->container('footer')->usePath()->add('core-script', 'js/scripts.js', array('jquery'));


        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }

        )

    )

);