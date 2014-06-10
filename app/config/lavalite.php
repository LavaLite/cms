<?php
return array(
	'name' 		=> 'Lava Lite',


	'url' 		=> 'http://www.lavalite.org',


	'locale' 	=> 'en',

	'locales' 	=> array('en', 'ar'),

	'admin'	=> array(
						'theme' 	=> 'admin',
						'layout' 	=> 'default',
						),

	'public'	=> array(
						'theme' 	=> 'public',
						'layout' 	=> 'default',
						),

	'user'	=> array(
						'theme' 	=> 'public',
						'layout' 	=> 'default',
						),

	'packages'	=> array(
						'user' 			=> true,
						'page' 			=> true,
						'menu' 			=> true,
						'catalogue' 	=> true,
						),

	'usertypes'	=> ['admin', 'superuser', 'user', 'developer'],

	'caching'	=> true,

);