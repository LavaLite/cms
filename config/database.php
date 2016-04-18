<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch'       => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default'     => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => database_path('database.sqlite'),
            'prefix'   => '',
        ],

        'mysql'  => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'pgsql'  => [
            'driver'   => 'pgsql',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations'  => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis'       => [

        'cluster' => false,

        'default' => [
            'host'     => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port'     => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

    /**
     *--------------------------------------------------------------------------
     * Repository Pagination Limit Default
     *--------------------------------------------------------------------------
     *
     */
    'pagination'  => [
        'limit' => 15,
    ],

    /**
     *--------------------------------------------------------------------------
     * Fractal Presenter Config
     *--------------------------------------------------------------------------
     *

    Available serializers:
    ArraySerializer
    DataArraySerializer
    JsonApiSerializer

     */
    'fractal'     => [
        'params'     => [
            'include' => 'include',
        ],
        'serializer' => League\Fractal\Serializer\DataArraySerializer::class,
    ],

    /**
     *--------------------------------------------------------------------------
     * Cache Config
     *--------------------------------------------------------------------------
     *
     */
    'cache'       => [
        /**
         *--------------------------------------------------------------------------
         * Cache Status
         *--------------------------------------------------------------------------
         *
         * Enable or disable cache
         *
         */
        'enabled'    => true,

        /**
         *--------------------------------------------------------------------------
         * Cache Minutes
         *--------------------------------------------------------------------------
         *
         * Time of expiration cache
         *
         */
        'minutes'    => 30,

        /**
         *--------------------------------------------------------------------------
         * Cache Repository
         *--------------------------------------------------------------------------
         *
         * Instance of Illuminate\Contracts\Cache\Repository
         *
         */
        'repository' => 'cache',

        /**
         *--------------------------------------------------------------------------
         * Cache Clean Listener
         *--------------------------------------------------------------------------
         *
         *
         *
         */
        'clean'      => [

            /**
             *--------------------------------------------------------------------------
             * Enable clear cache on repository changes
             *--------------------------------------------------------------------------
             *
             */
            'enabled' => true,

            /**
             *--------------------------------------------------------------------------
             * Actions in Repository
             *--------------------------------------------------------------------------
             *
             * create : Clear Cache on create Entry in repository
             * update : Clear Cache on update Entry in repository
             * delete : Clear Cache on delete Entry in repository
             *
             */
            'on'      => [
                'create' => true,
                'update' => true,
                'delete' => true,
            ],
        ],

        'params'     => [
            /**
             *--------------------------------------------------------------------------
             * Skip Cache Params
             *--------------------------------------------------------------------------
             *
             *
             * Ex: http://lavalite.org/?search=lorem&skipCache=true
             *
             */
            'skipCache' => 'skipCache',
        ],

        /**
         *--------------------------------------------------------------------------
         * Methods Allowed
         *--------------------------------------------------------------------------
         *
         * methods cacheable : all, paginate, find, findByField, findWhere, getByCriteria
         *
         * Ex:
         *
         * 'only'  =>['all','paginate'],
         *
         * or
         *
         * 'except'  =>['find'],
         */
        'allowed'    => [
            'only'   => null,
            'except' => null,
        ],
    ],

    /**
     *--------------------------------------------------------------------------
     * Criteria Config
     *--------------------------------------------------------------------------
     *
     * Settings of request parameters names that will be used by Criteria
     *
     */
    'criteria'    => [
        /**
         *--------------------------------------------------------------------------
         * Accepted Conditions
         *--------------------------------------------------------------------------
         *
         * Conditions accepted in consultations where the Criteria
         *
         * Ex:
         *
         * 'acceptedConditions'=>['=','like']
         *
         * $query->where('foo','=','bar')
         * $query->where('foo','like','bar')
         *
         */
        'acceptedConditions' => [
            '=', '>', '>=', '<', '<=', '!=', '<>', 'like', 'not like', 'between',
            'not between', 'in', 'not in', 'null', 'not null',
        ],
        /**
         *--------------------------------------------------------------------------
         * Request Params
         *--------------------------------------------------------------------------
         *
         * Request parameters that will be used to filter the query in the repository
         *
         * Params :
         *
         * - search : Searched value
         *   Ex: http://lavalite.org/?search=lorem
         *
         * - searchFields : Fields in which research should be carried out
         *   Ex:
         *    http://lavalite.org/?search=lorem&searchFields=name;email
         *    http://lavalite.org/?search=lorem&searchFields=name:like;email
         *    http://lavalite.org/?search=lorem&searchFields=name:like
         *
         * - filter : Fields that must be returned to the response object
         *   Ex:
         *   http://lavalite.org/?search=lorem&columns=id,name
         *
         * - sortBy : Order By
         *   Ex:
         *   http://lavalite.org/?search=lorem&sortBy=id
         *
         * - sortOrder : Sort
         *   Ex:
         *   http://lavalite.org/?search=lorem&sortBy=id&sortOrder=asc
         *   http://lavalite.org/?search=lorem&sortBy=id&sortOrder=desc
         *
         */
        'params'             => [
            'search'       => 'search',
            'searchFields' => 'searchFields',
            'columns'      => 'columns',
            'sortBy'       => 'sortBy',
            'sortOrder'    => 'sortOrder',
            'with'         => 'with',
        ],
    ],
];
