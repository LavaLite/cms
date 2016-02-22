<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'message',

/*
* Modules .
*/
'modules'   => ['message'],

'image'     => [
                        'xs'        => ['width' => '60',     'height' => '45', 'default' => ''],
                        'sm'        => ['width' => '160',    'height' => '75'],
                        'md'        => ['width' => '460',    'height' => '345'],
                        'lg'        => ['width' => '800',    'height' => '600'],
                        'xl'        => ['width' => '1000',   'height' => '750'],
                    ],

'view'      => base_path('resources/views/message'),

'message' => [
                    'Name'              => 'Message',
                    'name'              => 'message',
                    'table'             => 'messages',
                    'model'             => 'Lavalite\Message\Models\Message',
                    'permissions'       => ['admin'     => ['view', 'create', 'edit', 'delete']],
                    'fillable'          => ['user_id', 'status',  'from',  'to',  'subject',  'message',  'read',  'type'],
                    'listfields'        => ['id', 'status',  'from',  'to',  'subject',  'message',  'read',  'type'],
                    'translatable'      => ['status',  'from',  'to',  'subject',  'message',  'read',  'type'],
                    'upload-folder'     => '/uploads/message/message',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
];
