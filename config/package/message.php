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

'image' => [
            'xs'            => ['width' => '60',     'height' => '45',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'sm'            => ['width' => '160',    'height' => '75',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'md'            => ['width' => '460',    'height' => '345', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'lg'            => ['width' => '800',    'height' => '600', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'xl'            => ['width' => '1000',   'height' => '750', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            ],

// Modale variables for message module.
'message' => [
                'model'         => 'Lavalite\Message\Models\Message',
                'table'         => 'messages',
                'primaryKey'    => 'id',
                'hidden'        => [],
                'visible'       => [],
                'guarded'       => ['*'],
                'slugs'         => [],
                'dates'         => ['deleted_at', 'created_at', 'updated_at'],
                'appends'       => ['eid'],
                'fillable'      => ['user_id', 'status', 'sub_status',  'from',  'to',  'subject',  'message',  'read',  'type'],
                'listfields'    => ['id', 'status', 'sub_status',  'from',  'to',  'subject',  'message',  'read',  'type'],
                'uploadfolder'  => '/uploads/message/message',
                'uploads'       => [
                                        'single'   => [],
                                        'multiple' => [],
                                   ],
                'casts'         => [
                                   ],
                'encrypt'       => ['id'],
                'perPage'       => '20',

           ],

];
