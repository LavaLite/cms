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


             $theme->asset()->add('bootstrap', '/vendor/bootstrap/dist/css/bootstrap.min.css');
             $theme->asset()->add('bootstrap', '/vendor/bootstrap/dist/css/bootstrap-theme.min.css');
             $theme->asset()->add('datetimepicker', '/vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
             $theme->asset()->add('font-awesome', '/vendor/font-awesome/css/font-awesome.min.css');
             $theme->asset()->add('summernote', '/vendor/summernote/summernote-dist/summernote.css');
             $theme->asset()->add('bs-switch', '/vendor/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.min.css');
             $theme->asset()->add('ezdz', '/vendor/ezdz/dist/jquery.ezdz.min.css');
             $theme->asset()->add('CaptionHoverEffects', '/vendor/CaptionHoverEffects/css/component.css');



             $theme->asset()->add('jquery', '/vendor/jquery/dist/jquery.min.js');

             $theme->asset()->container('footer')->add('bootstrap', '/vendor/bootstrap/dist/js/bootstrap.min.js', array('jquery'));
             $theme->asset()->container('footer')->add('datetimepicker', '/vendor/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', array('jquery'));
             $theme->asset()->container('footer')->add('ezdz', '/vendor/ezdz/dist/jquery.ezdz.min.js', array('jquery'));
             $theme->asset()->container('footer')->add('dropzone', '/vendor/dropzone/downloads/dropzone.js', array('jquery'));
             $theme->asset()->container('footer')->add('summernote', '/vendor/summernote/summernote-dist/summernote.min.js');
             $theme->asset()->container('footer')->add('bs-switch', '/vendor/bootstrap-switch/build/js/bootstrap-switch.js', array('jquery'));
             $theme->asset()->container('footer')->add('CaptionHoverEffectsmod', '/vendor/CaptionHoverEffects/js/modernizr.custom.js');
             $theme->asset()->container('footer')->add('CaptionHoverEffects', '/vendor/CaptionHoverEffects/js/toucheffects.js');
             $theme->asset()->container('footer')->add('dropzone', '/vendor/dropzone/downloads/dropzone.min.js', array('jquery'));

             $theme->asset()->container('footer')->usePath()->add('restfulizer', 'js/restfulizer.js', array('jquery'));
			 $theme->asset()->container('footer')->usePath()->add('core-script', 'js/scripts.js', array('jquery'));
             //Partial composer.
             $theme->partialComposer('header', function($view)
             {
                 $view->with('auth', Auth::user());
             });
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