<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
     */

    'defaults'  => [
        'api'       => 'api',
        'guard'     => 'web',
        'passwords' => 'user',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
     */

    'guards'    => [

        'web'    => [
            'driver'   => 'session',
            'provider' => 'users',
        ],

        'api'    => [
            'driver'   => 'token',
            'provider' => 'users',
        ],

        'admin'  => [
            'web' => [
                'driver'   => 'session',
                'provider' => 'users',
            ],

            'api' => [
                'driver'   => 'token',
                'provider' => 'users',
            ],

        ],

        'client' => [
            'web' => [
                'driver'   => 'session',
                'provider' => 'clients',
            ],

            'api' => [
                'driver'   => 'token',
                'provider' => 'clients',
            ],

        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
     */

    'providers' => [
        'users'   => [
            'driver' => 'eloquent',
            'model'  => App\User::class,
            'table'  => 'users',
        ],

        'clients' => [
            'driver' => 'eloquent',
            'model'  => App\Client::class,
            'table'  => 'clients',
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Here you may set the options for resetting passwords including the view
    | that is your password reset e-mail. You may also set the name of the
    | table that maintains all of the reset tokens for your application.
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | seperate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
     */

    'passwords' => [
        'user'   => [
            'provider' => 'users',
            'email'    => 'user::user.default.emails.password',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'admin'  => [
            'provider' => 'users',
            'email'    => 'user::user.admin.emails.password',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'client' => [
            'provider' => 'clients',
            'email'    => 'user::user.default.emails.password',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Route bindings
    |--------------------------------------------------------------------------
    |
    | Here you can list the relation with the route to the guard
    |
     */

    'routes'    => [
        'user'   => [
            'web' => [
                'guard'  => 'web',
                'broker' => 'user',
                'home'   => 'home',
            ],
            'api' => [
                'broker' => 'user',
                'guard'  => 'api',
            ],
        ],
        'client' => [
            'web' => [
                'guard'  => 'client.web',
                'broker' => 'client',
                'home'   => 'client',
            ],
            'api' => [
                'guard'  => 'api',
                'broker' => 'client',
            ],
        ],
        'admin'  => [
            'web' => [
                'guard'  => 'admin.web',
                'broker' => 'admin',
                'home'   => 'admin',
            ],
            'api' => [
                'guard'  => 'api',
                'broker' => 'admin',
            ],
        ],
    ],
];
