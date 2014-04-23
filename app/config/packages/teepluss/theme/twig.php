<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | PHP alow in twig
    |--------------------------------------------------------------------------
    |
    | This is laravel alias to allow in twig compiler
    | The list all of methods is at /app/config/app.php
    |
    */

    'allows' => array(
        'Auth',
        'Cache',
        'Config',
        'Cookie',
        'Form',
        'HTML',
        'Input',
        'Lang',
        'Paginator',
        'Str',
        'Theme',
        'URL',
        'Validator'
    ),

    /*
    |--------------------------------------------------------------------------
    | PHP alow in twig
    |--------------------------------------------------------------------------
    |
    | This is laravel alias to allow in twig compiler
    | The list all of methods is at /app/config/app.php
    |
    */

    'hooks' => function($twig)
    {
        // Example add funciton name "demo".
        /*$function = new Twig_SimpleFunction('example', function()
        {
            $args = func_get_args();

            return "Example" . print_r($args, true);
        });

        $twig->addFunction($function);*/

        return $twig;
    }

);