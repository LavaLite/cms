<?php

return [

    /*
     * Singlular and plural name of the module
     */
    'name'  => 'Setting',
    'names' => 'Settings',
    'title' => [
        'main'          => 'Main',
        'company'       => 'Company',
        'theme'         => 'Theme',
        'general'       => 'General',
        'integration'   => 'Integration',
        'subscription'  => 'Subscription',
        'team'          => 'Team',
        'subscriptions' => 'Subscriptions',
        'social'        => 'Social logins',
        'payment'       => 'Payment',
        'email'         => 'Email',
        'sms'           => 'SMS',
        'chat'          => 'Chat',
        'google'        => 'Google',
        'user'          => 'My Settings',
        'admin'         => 'Settings',
        'calendar'      => 'Calendar',
        'sub'           => [
            'user'  => 'Settings created by me',
            'admin' => 'Settings',
        ],
    ],

    /*
     * Options for select/radio/check.
     */
    'options' => [
        'dateformat' => [
            'd-m-Y' => 'd-m-Y',
            'd/m/Y' => 'd/m/Y',
            'm-d-Y' => 'm-d-Y',
            'm.d.Y' => 'm.d.Y',
            'm/d/Y' => 'm/d/Y',
            'Y-m-d' => 'Y-m-d',
            'd.m.Y' => 'd.m.Y',
        ],
        'timeformat' => [
            'HH:mm'   => '24 Hr',
            'hh:mm A' => '12 Hr',
        ],
        'theme' => [
            'blue'   => 'Blue',
            'black'  => 'Black',
            'purple' => 'Purple',
            'green'  => 'Green',
            'red'    => 'Red',
            'yellow' => 'Yellow',
        ],
        'mail' => [
            'driver' => [
                'mail' => 'Mail',
                'smtp' => 'SMTP',
            ],
            'encryption' => [
                'null' => 'None',
                'ssl'  => 'SSL',
                'tls'  => 'TLS',
            ],
        ],

        'currency' => [
            'currency' => [
                'ARS' => 'Argentine Peso',
                'AUD' => 'Australian Dollar',
                'BRL' => 'Brazilian Real',
                'CAD' => 'Canadian Dollar',
                'CHF' => 'Swiss Frank',
                'DKK' => 'Danish Krone',
                'EUR' => 'Euro',
                'GBP' => 'British Pound',
                'HKD' => 'Hong Kong Dollar',
                'INR' => 'Indian Rupee',
                'JPY' => 'Japanese Yen',
                'MXN' => 'Mexican Peso',
                'NOK' => 'Norwegian Krone',
                'NZD' => 'New Zealand Dollar',
                'RUB' => 'Russian Rubble',
                'SEK' => 'Swedish Krona',
                'SGD' => 'Singapore Dollar',
                'TRY' => 'Turkish Lira',
                'USD' => 'US Dollar',
            ],
            'position' => [
                'left'  => 'Left',
                'right' => 'Right',
            ],
        ],
        'calendar' => [
            'provider' => [
                'google'  => 'Google',
                'calandy' => 'Calanday',
            ],
        ],
    ],

    /*
     * Placeholder for inputs
     */
    'placeholder' => [
        'name'   => 'name',
        'google' => [
            'analytics' => 'Please enter google analytics code',
            'recaptcha' => 'Please enter google recaptcha code',
        ],
        'theme'      => 'Please select theme',
        'dateformat' => 'Please select date format',
        'timeformat' => 'Please select time format',
        'timezone'   => 'Please select timezone',
        'company'    => [
            'name'     => 'Please enter company name',
            'email'    => 'Please enter company email',
            'phone'    => 'Please enter company phone',
            'logo'     => 'Please enter company logo',
            'logo_big' => 'Please enter company logo(big)',
            'address'  => 'Please enter company address',
        ],
        'currency' => [
            'currency'          => 'Please select currency',
            'position'          => 'Please select currency position',
            'thousandseperator' => 'Please enter thousand seperator',
            'decimalseperator'  => 'Please enter decimal seperator',
            'decimal'           => 'Please enter decimeal places',
        ],
        'mail' => [
            'driver'     => 'Please select driver',
            'host'       => 'Please enter email host',
            'port'       => 'Please enter email port',
            'user'       => 'Please enter email user',
            'password'   => 'Please enter email password',
            'encryption' => 'Please enter email encryption',
        ],
        'social' => [
            'twitter_client_id'      => 'Please enter twitter client id',
            'twitter_client_secret'  => 'Please enter twitter secret key',
            'facebook_client_id'     => 'Please enter facebook client id',
            'facebook_client_secret' => 'Please enter facebook secret key',
            'linkedin_client_id'     => 'Please enter linkedin client id',
            'linkedin_client_secret' => 'Please enter linkedin secret key',
            'google_client_id'       => 'Please enter google client id',
            'google_client_secret'   => 'Please enter google secret key',
        ],
        'payment' => [
            'paypal_client_id'     => 'Please enter paypal client id',
            'paypal_client_secret' => 'Please enter paypal secret key',
        ],
        'google' => [
            'analytics' => 'Please enter analytics Code',
            'recaptcha' => 'Please enter recaptcha Code',
        ],
        'chat' => [
            'twalkto'   => 'Please enter Twalk.to Code',
            'freshchat' => 'Please enter freshchat Code',
        ],
        'sms' => [
            'url'  => 'Please enter SMS api URL',
            'code' => 'Please enter SMS api Code',
            'secret' => 'Please enter SMS api secret',
        ],
        'calendar' => [
            'provider'    => 'Please select provider',
            'token'       => 'Please enter token',
            'credentials' => 'Please enter crediantials',
        ],
    ],

    'help' => [
        'name'   => 'Enter the name of the website or application.',
        'google' => [
            'analytics' => 'Enter google analytics code',
            'recaptcha' => 'Enter google analytics code',
        ],
        'theme'      => 'Pick the theme for the admin panel',
        'dateformat' => 'Select the date format to be displayed',
        'timeformat' => 'Select the time format to be displayed',
        'timezone'   => 'Select the timezone',
    ],

    /*
     * Labels for inputs.
     */
    'label' => [
        'name'   => 'Name',
        'google' => [
            'analytics' => 'Google analytics code',
            'recaptcha' => 'Google recaptcha code',
        ],
        'dateformat' => 'Date format',
        'timeformat' => 'Time format',
        'timezone'   => 'Timezone',
        'company'    => [
            'name'     => 'Company name',
            'email'    => 'Company email',
            'phone'    => 'Company phone',
            'logo'     => 'Company logo',
            'logo_big' => 'Company logo(big)',
            'address'  => 'Company address',
        ],
        'currency' => [
            'heading'           => 'Currency',
            'currency'          => 'Currency',
            'position'          => 'Currency position',
            'thousandseperator' => 'Thousand seperator',
            'decimalseperator'  => 'Decimal seperator',
            'decimal'           => 'Decimeal places',
        ],
        'mail' => [
            'driver'     => 'Email driver',
            'host'       => 'Host',
            'port'       => 'Port',
            'user'       => 'User',
            'password'   => 'Password',
            'encryption' => 'Encryption',
        ],
        'social' => [
            'twitter'                => 'Twitter',
            'twitter_client_id'      => 'Twitter client id',
            'twitter_client_secret'  => 'Twitter secret key',
            'facebook'               => 'Facebook',
            'facebook_client_id'     => 'Facebook client id',
            'facebook_client_secret' => 'Facebook secret key',
            'linkedin'               => 'Linkedin',
            'linkedin_client_id'     => 'Linkedin client id',
            'linkedin_client_secret' => 'Linkedin secret key',
            'google'                 => 'Google',
            'google_client_id'       => 'Google client id',
            'google_client_secret'   => 'Google secret key',
        ],
        'payment' => [
            'paypal'               => 'Paypal',
            'paypal_client_id'     => 'Paypal client id',
            'paypal_client_secret' => 'Paypal secret key',
        ],
        'google' => [
            'analytics' => 'Analytics Code',
            'recaptcha' => 'Recaptcha Code',
        ],
        'chat' => [
            'twalkto'   => 'Twalk.to Code',
            'freshchat' => 'freshchat Code',
        ],
        'sms' => [
            'url'  => 'SMS api URL',
            'code' => 'SMS api Code',
            'secret' => 'SMS api Secret',
        ],
        'calendar' => [
            'provider'    => 'Provider',
            'token'       => 'Token',
            'credentials' => 'Crediantials',
        ],
        'theme' => [
            'name'  => 'Theme',
            'admin' => [
                'name'  => 'Admin',
                'color' => 'Color',
                'logo'  => [
                    'logo'  => 'Logo',
                    'big'   => 'Big logo',
                    'white' => 'White logo',
                ],
            ],
            'user' => [
                'name'  => 'User',
                'color' => 'Color',
                'logo'  => [
                    'logo'  => 'Logo',
                    'big'   => 'Big logo',
                    'white' => 'White logo',
                ],
            ],
            'public' => [
                'name'  => 'Public',
                'color' => 'Color',
                'logo'  => [
                    'logo'  => 'Logo',
                    'big'   => 'Big logo',
                    'white' => 'White logo',
                ],
            ],
        ],
    ],
];