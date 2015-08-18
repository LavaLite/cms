<?php

/**
 * Defender - Laravel 5 ACL Package
 * Author: PHPArtisans.
 */
return [

    /*
     * Default Role model used by Defender.
     */
    'role_model' => 'Artesaos\Defender\Role',

    /*
     * Default Permission model used by Defender.
     */
    'permission_model' => 'Artesaos\Defender\Permission',

    /*
     * Roles table name
     */
    'role_table' => 'roles',

    /*
     *
     */
    'role_key' => 'role_id',

    /*
     * Permissions table name
     */
    'permission_table' => 'permissions',

    /*
     *
     */
    'permission_key' => 'permission_id',

    /*
     * Pivot table for roles and users
     */
    'role_user_table' => 'role_user',

    /*
     * Pivot table for permissions and roles
     */
    'permission_role_table' => 'permission_role',

    /*
     * Pivot table for permissions and users
     */
    'permission_user_table' => 'permission_user',

    /*
     * Forbidden callback
     */
    'forbidden_callback' => function () {
        throw new \Artesaos\Defender\Exceptions\ForbiddenException();
    },

    /*
     * Use blade template helpers
     */
    'template_helpers' => true,

    /*
     * Use helper functions
     */
    'helpers' => true,

    /*
     * Super User role name
     */
    'superuser_role' => 'superuser',

    /*
     * js var name
     */
    'js_var_name' => 'defender',

];
