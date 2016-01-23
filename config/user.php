<?php

return [

/*
* Provider .
*/

'provider'      => 'lavalite',

/*
* package .
*/
'package'       => 'user',

'modules'       => ['user', 'role', 'permission'],

'view'          => base_path('resources/views/user'),

'image'         => [
                    'xs'        => ['width' => '60',     'height' => '45'],
                    'sm'        => ['width' => '100',    'height' => '75'],
                    'md'        => ['width' => '460',    'height' => '345'],
                    'lg'        => ['width' => '800',    'height' => '600'],
                    'xl'        => ['width' => '1000',   'height' => '750'],
],
'permission'    => [
                    'model'         => 'Litepie\User\Models\Permission',
                    'table'         => 'permissions',
                    'primaryKey'    => 'id',
                    'hidden'        => [],
                    'visible'       => [],
                    'guarded'       => ['*'],
                    'slugs'         => ['slug' => 'name'],
                    'dates'         => ['deleted_at'],
                    'appends'       => ['eid'],
                    'fillable'      => ['name', 'slug'],
                    'listfields'    => ['id', 'name', 'slug'],
                    'translate'     => ['name'],
                    'perPage'       => '20',

                ],
'role'       => [
                    'model'         => 'Litepie\User\Models\Role',
                    'table'         => 'roles',
                    'primaryKey'    => 'id',
                    'hidden'        => [],
                    'visible'       => [],
                    'guarded'       => ['*'],
                    'slugs'         => ['slug' => 'name'],
                    'dates'         => ['deleted_at'],
                    'appends'       => ['eid'],
                    'fillable'      => ['name', 'slug'],
                    'listfields'    => ['id', 'name', 'slug'],
                    'casts'         => [
                                        'permissions'   => 'array'
                                       ],
                    'translate'     => ['name'],
                    'perPage'       => '20',
            ],

'user'      => [
                    'model'         => 'App\User',
                    'table'         => 'users',
                    'primaryKey'    => 'id',
                    'hidden'        => ['password', 'remember_token'],
                    'visible'       => [],
                    'guarded'       => ['*'],
                    'slugs'         => ['slug' => 'name'],
                    'dates'         => ['deleted_at'],
                    'appends'       => ['eid'],
                    'fillable'      => ['reporting_id', 'name', 'email', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web'],
                    'listfields'    => ['id', 'reporting_id', 'name', 'email', 'sex', 'dob', 'designation', 'mobile', 'phone', 'address', 'street', 'city', 'district', 'state', 'country', 'web'],
                    'uploadfolder'  => '/uploads/users',
                    'uploadable'    => [
                                            'single'   => ['photo'],
                                            'multiple' => [],
                                        ],
                    'casts'         => [
                                        'permissions'   => 'array'
                                       ],
                    'perPage'       => '20',
            ],
];
