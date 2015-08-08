<?php
return [
    'name'      => 'Lava Lite',

    'url'       => 'http://www.lavalite.org',

    'locale'    => 'en',

    'locales'   => ['en', 'fr'],

    'themes'    => [
                    'admin'     => [ 'theme'    => 'admin',     'layout'    => 'default'],
                    'public'    => [ 'theme'    => 'public',    'layout'    => 'default'],
                    'user'      => [ 'theme'    => 'public',    'layout'    => 'user'],
                    ],

    'packages'  => [ 'user', 'pages', 'menu'],

    'usertypes' => ['admin' => 'Administrator', 'superuser' => 'Super user', 'user' => 'User', 'developer' => 'Developer'],

];
