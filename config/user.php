<?php

return [

    /*
     * Provider .
     */

    'provider' => 'lavalite',

    /*
     * package .
     */

    'package' => 'user',

    /*
     * Super User role name
     */
    'superuser_role' => 'superuser',

    /*
     * Modules in the package
     */
    'modules' => ['user', 'role', 'permission'],

    'permission' => [
                    'Name'          => 'Permission',
                    'name'          => 'permission',
                    'table'         => 'permissions',
                    'model'         => 'Lavalite\User\Models\Permission',
                    'permissions'   => ['view', 'create', 'edit', 'delete'],
                    'image'         => [
                        'xs'        => ['width' => '60',     'height' => '45'],
                        'sm'        => ['width' => '100',    'height' => '75'],
                        'md'        => ['width' => '460',    'height' => '345'],
                        'lg'        => ['width' => '800',    'height' => '600'],
                        'xl'        => ['width' => '1000',   'height' => '750'],
                        ],
                    'fillable'          => ['id', 'name', 'readable_name', 'created_at', 'updated_at'],
                    'listfields'        => ['id', 'name', 'readable_name', 'created_at', 'updated_at'],
                    'translatable'      => ['id', 'name', 'readable_name', 'created_at', 'updated_at'],
                    'upload-folder'     => '/uploads/permissions',
                    'uploadable'        => [
                                                'single'   => [],
                                                'multiple' => [],
                                            ],

                    ],
    'role' => [
                    'Name'          => 'Role',
                    'name'          => 'role',
                    'table'         => 'roles',
                    'model'         => 'Lavalite\User\Models\Role',
                    'permissions'   => ['view', 'create', 'edit', 'delete'],
                    'image'         => [
                        'xs'        => ['width' => '60',     'height' => '45'],
                        'sm'        => ['width' => '100',    'height' => '75'],
                        'md'        => ['width' => '460',    'height' => '345'],
                        'lg'        => ['width' => '800',    'height' => '600'],
                        'xl'        => ['width' => '1000',   'height' => '750'],
                        ],
                    'fillable'          => ['id', 'name', 'created_at', 'updated_at'],
                    'listfields'        => ['id', 'name', 'created_at', 'updated_at'],
                    'translatable'      => ['id', 'name', 'created_at', 'updated_at'],
                    'upload-folder'     => '/uploads/roles',
                    'uploadable'        => [
                                                'single'   => [],
                                                'multiple' => [],
                                            ],

                    ],

    'user' => [
                    'Name'          => 'User',
                    'name'          => 'user',
                    'table'         => 'users',
                    'model'         => 'Lavalite\User\Models\User',
                    'permissions'   => ['view', 'create', 'edit', 'delete'],
                    'image'         => [
                        'xs'        => ['width' => '60',     'height' => '45'],
                        'sm'        => ['width' => '100',    'height' => '75'],
                        'md'        => ['width' => '460',    'height' => '345'],
                        'lg'        => ['width' => '800',    'height' => '600'],
                        'xl'        => ['width' => '1000',   'height' => '750'],
                        ],
                    'fillable'          => ['id', 'reporting_to', 'name', 'email', 'password', 'active', 'remember_token', 'sex', 'dob',
                                            'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web', ],
                    'listfields'        => ['id', 'reporting_to', 'name', 'email', 'password', 'active', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web', 'social_login', 'deleted_at', 'created_at', 'updated_at'],
                    'translatable'      => ['id', 'reporting_to', 'name', 'email', 'password', 'active', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web', 'social_login', 'deleted_at', 'created_at', 'updated_at'],
                    'upload-folder'     => '/uploads/users',
                    'uploadable'        => [
                                                'single'   => ['photo'],
                                                'multiple' => [],
                                            ],

                    ],

        'permission_role' => [
                            'Name'          => 'PermissionRole',
                            'name'          => 'permission_role',
                            'table'         => 'permission_roles',
                            'model'         => 'Lavalite\User\Models\PermissionRole',
                            'image'         => [
                                'xs'        => ['width' => '60',     'height' => '45'],
                                'sm'        => ['width' => '100',    'height' => '75'],
                                'md'        => ['width' => '460',    'height' => '345'],
                                'lg'        => ['width' => '800',    'height' => '600'],
                                'xl'        => ['width' => '1000',   'height' => '750'],
                                ],

                            'fillable'          => ['permission_id',            'role_id'],
                            'listfields'        => ['permission_id',            'role_id'],
                            'translatable'      => ['permission_id',            'role_id'],

                            'upload-folder'     => '/uploads/user/permission_role',
                            'uploadable'        => [
                                                        'single'   => [],
                                                        'multiple' => [],
                                                    ],
                        ],

        'permission_user' => [
                            'Name'          => 'PermissionUser',
                            'name'          => 'permission_user',
                            'table'         => 'permission_users',
                            'model'         => 'Lavalite\User\Models\PermissionUser',
                            'image'         => [
                                'xs'        => ['width' => '60',     'height' => '45'],
                                'sm'        => ['width' => '100',    'height' => '75'],
                                'md'        => ['width' => '460',    'height' => '345'],
                                'lg'        => ['width' => '800',    'height' => '600'],
                                'xl'        => ['width' => '1000',   'height' => '750'],
                                ],

                            'fillable'          => ['permission_id',            'user_id'],
                            'listfields'        => ['permission_id',            'user_id'],
                            'translatable'      => ['permission_id',            'user_id'],

                            'upload-folder'     => '/uploads/user/permission_user',
                            'uploadable'        => [
                                                        'single'   => [],
                                                        'multiple' => [],
                                                    ],
                        ],

        'role_user' => [
                            'Name'          => 'RoleUser',
                            'name'          => 'role_user',
                            'table'         => 'role_users',
                            'model'         => 'Lavalite\User\Models\RoleUser',
                            'image'         => [
                                'xs'        => ['width' => '60',     'height' => '45'],
                                'sm'        => ['width' => '100',    'height' => '75'],
                                'md'        => ['width' => '460',    'height' => '345'],
                                'lg'        => ['width' => '800',    'height' => '600'],
                                'xl'        => ['width' => '1000',   'height' => '750'],
                                ],

                            'fillable'          => ['role_id',            'user_id'],
                            'listfields'        => ['role_id',            'user_id'],
                            'translatable'      => ['role_id',            'user_id'],

                            'upload-folder'     => '/uploads/user/role_user',
                            'uploadable'        => [
                                                        'single'   => [],
                                                        'multiple' => [],
                                                    ],
                        ],
];
