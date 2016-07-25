<?php

return [


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
