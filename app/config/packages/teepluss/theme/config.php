<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Asset compression path
	|--------------------------------------------------------------------------
	|
	| The path to compress assets after at public directory.
	|
	*/

	'compressDir' => 'cache',


	/*
	|--------------------------------------------------------------------------
	| Force compress assets
	|--------------------------------------------------------------------------
	|
	| This forces Theme to (re)compile compression assets on every invocation.
	| By default this is FALSE. This is handy for development and debugging,
	| It should never be used in a production environment.
	|
	*/

	'forceCompress' => false,


	/*
	|--------------------------------------------------------------------------
	| Capture asset compression
	|--------------------------------------------------------------------------
	|
	| When you queue asset to be compression, normally It read your file(s)
	| everytime, but on production you can stop the process by set capture
	| true, this will be increase performance.
	|
	| eg. (App::environment() == 'production') ? true : false
	|
	*/

	'assetCapture' => false,


	/*
	|--------------------------------------------------------------------------
	| Theme Default
	|--------------------------------------------------------------------------
	|
	| If you don't set a theme when using a "Theme" class the default theme
	| will replace automatically.
	|
	*/

	'themeDefault' => 'admin',


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

	'themeDir' => 'themes',


	/*
	|--------------------------------------------------------------------------
	| A pieces of theme collections
	|--------------------------------------------------------------------------
	|
	| Inside a theme path we need to set up directories to
	| keep "layouts", "assets" and "partials".
	|
	*/

	'containerDir' => array(
		'layout'  => 'layouts',
		'asset'   => 'assets',
		'partial' => 'partials',
		'widget'  => 'widgets',
		'view'    => 'views'
	),


	/*
	|--------------------------------------------------------------------------
	| Listener from events
	|--------------------------------------------------------------------------
	|
	| You can hook a theme when event fired on activities
	| this is cool feature to set up a title, meta, default styles and scripts.
	|
	*/

	'events' => array(

		// Before all event, this event will effect for global.
		'before' => function($theme)
		{
			//$theme->setTitle('Something in global.');
		},

		// This event will fire as a global you can add any assets you want here.
		'asset' => function($asset)
		{
			// Preparing asset you need to serve after.
            $asset->cook('backbone', function($asset)
            {
                $asset->add('backbone', '//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js');
                $asset->add('underscorejs', '//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js');
            });

            // To use cook 'backbone' you can fire with 'serve' method.
            // Theme::asset()->serve('backbone');
		}

	)

);