<?php

return array(

    /**
     * Provider .
     */

    'provider' => 'lavalite',

    /**
     * package .
     */

    'package' => 'user',

    'modules' => ['user', 'role', 'role'],

    'permission' =>
                    [
                    'Name'          => 'Permission',
                    'name'          => 'permission',
                    'table'         => 'permissions',
                    'model'         => 'Lavalite\User\Models\Permission',
                    'permissions'   => ['view', 'create', 'edit', 'delete'],
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],
                    'fillable'          =>  ['id', 'name', 'readable_name', 'created_at', 'updated_at'],
                    'listfields'        =>  ['id', 'name', 'readable_name', 'created_at', 'updated_at'],
                    'translatable'      =>  ['id', 'name', 'readable_name', 'created_at', 'updated_at'],
                    'upload-folder'     =>  '/uploads/permissions',
                    'uploadable'        =>  [
                                                'single' => [],
                                                'multiple' => []
                                            ],

                    ],
    'role' =>
                    [
                    'Name'          => 'Role',
                    'name'          => 'role',
                    'table'         => 'roles',
                    'model'         => 'Lavalite\User\Models\Role',
                    'permissions'   => ['view', 'create', 'edit', 'delete'],
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],
                    'fillable'          =>  ['id', 'name', 'created_at', 'updated_at'],
                    'listfields'        =>  ['id', 'name', 'created_at', 'updated_at'],
                    'translatable'      =>  ['id', 'name', 'created_at', 'updated_at'],
                    'upload-folder'     =>  '/uploads/roles',
                    'uploadable'        =>  [
                                                'single' => [],
                                                'multiple' => []
                                            ],

                    ],

    'user' => [
                    'Name'          => 'User',
                    'name'          => 'user',
                    'table'         => 'users',
                    'model'         => 'Lavalite\User\Models\User',
                    'permissions'   => ['view', 'create', 'edit', 'delete'],
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],
                    'fillable'          =>  ['id', 'reporting_to', 'first_name', 'last_name', 'email', 'password', 'active', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'building', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'social_login', 'deleted_at', 'created_at', 'updated_at'],
                    'listfields'        =>  ['id', 'reporting_to', 'first_name', 'last_name', 'email', 'password', 'active', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'building', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'social_login', 'deleted_at', 'created_at', 'updated_at'],
                    'translatable'      =>  ['id', 'reporting_to', 'first_name', 'last_name', 'email', 'password', 'active', 'remember_token', 'sex', 'dob', 'designation', 'mobile', 'phone', 'building', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'social_login', 'deleted_at', 'created_at', 'updated_at'],
                    'upload-folder'     =>  '/uploads/users',
                    'uploadable'        =>  [
                                                'single' => ['photo'],
                                                'multiple' => []
                                            ],

                    ],
);