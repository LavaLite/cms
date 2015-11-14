<?php

return [
    'name'      => 'Lava Lite',

    'url'       => 'http://www.lavalite.org',

    'locale'    => 'en',

    'locales'   => ['en', 'fr'],

    'themes'    => [
                    'admin'  => ['theme' => 'admin',     'layout' => 'default'],
                    'public' => ['theme' => 'public',    'layout' => 'default'],
                    'user'   => ['theme' => 'public',    'layout' => 'user'],
                    ],

    'roles'  => 'user|teamlead',
];
