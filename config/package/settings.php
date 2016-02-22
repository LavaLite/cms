<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'settings',

/*
* Modules .
*/
'modules'   => ['setting'],

'image' => [
            'xs'            => ['width' => '60',     'height' => '45',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'sm'            => ['width' => '160',    'height' => '75',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'md'            => ['width' => '460',    'height' => '345', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'lg'            => ['width' => '800',    'height' => '600', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'xl'            => ['width' => '1000',   'height' => '750', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            ],

'setting' => [
                'model'         => 'Lavalite\Settings\Models\Setting',
                'table'         => 'settings',
                'primaryKey'    => 'id',
                'hidden'        => [],
                'visible'       => [],
                'guarded'       => ['*'],
                'slugs'         => [],
                'dates'         => ['deleted_at'],
                'appends'       => ['eid'],
                'fillable'      => ['id', 'user_id', 'skey', 'name', 'value', 'type'],
                'listfields'    => ['id', 'user_id', 'skey', 'name', 'value', 'type'],
                // 'translate'  =>  ['id', 'user_id', 'skey', 'name', 'value', 'type'],
                'uploadfolder'  => '/uploads/settings/setting',
                'uploads'       => [
                                        'single'   => [],
                                        'multiple' => [],
                                   ],
                'casts'         => [],
                'encrypt'       => ['id'],
                'revision'      => ['name'],
                'perPage'       => '20',

           ],

];
