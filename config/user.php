<?php

return array(
/**
* Provider .
*/
'provider'      => 'lavalite',

/**
* Package .
*/
'package'       => 'user',

/**
* Modules .
*/
'modules'       => ['user'],

'permissions'   => ['user.view' => 'View', 'user.create' => 'Create', 'user.edit' => 'Edit', 'user.delete' => 'Delete'],

'user' => [
                    'Name'          => 'User',
                    'name'          => 'user',
                    'table'         => 'users',
                    'model'         => 'Lavalite\User\Models\User',
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],
                    'fillable'          =>  ['id', 'parent', 'email', 'password', 'permissions', 'activated', 'activation_code', 'activated_at', 'last_login', 'persist_code', 'reset_password_code', 'first_name', 'last_name', 'sex', 'dob', 'designation', 'department', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'type'],
                    'listfields'        =>  ['id', 'parent', 'email', 'password', 'permissions', 'activated', 'activation_code', 'activated_at', 'last_login', 'persist_code', 'reset_password_code', 'first_name', 'last_name', 'sex', 'dob', 'designation', 'department', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'type'],
                    'translatable'      =>  ['id', 'parent', 'email', 'password', 'permissions', 'activated', 'activation_code', 'activated_at', 'last_login', 'persist_code', 'reset_password_code', 'first_name', 'last_name', 'sex', 'dob', 'designation', 'department', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'photo', 'web', 'type'],
                    'upload-folder'     =>  '/uploads/users',
                    'uploadable'        =>  [
                                                'single' => [],
                                                'multiple' => []
                                            ],

                    ],

);