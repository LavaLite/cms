<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'calendar',

/*
* Modules .
*/
'modules'   => ['calendar'],
'image'     => [
            'xs'            => ['width' => '60',     'height' => '45',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'sm'            => ['width' => '160',    'height' => '75',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'md'            => ['width' => '460',    'height' => '345', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'lg'            => ['width' => '800',    'height' => '600', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'xl'            => ['width' => '1000',   'height' => '750', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            ],

// Modale variables for calendar module.
'calendar' => [
                'model'             => 'Lavalite\Calendar\Models\Calendar',
                'table'             => 'calendars',
                'primaryKey'        => 'id',
                'hidden'            => [],
                'visible'           => [],
                'guarded'           => ['*'],
                'slugs'             => [],
                'dates'             => ['deleted_at'],
                'appends'           => ['id'],
                'fillable'          => ['user_id', 'category_id', 'status', 'start', 'end', 'location', 'color', 'title', 'details', 'created_by', 'created_at', 'updated_at', 'deleted_at'],
                'listfields'        => ['id', 'user_id', 'category_id', 'status', 'start', 'end', 'location', 'color', 'title', 'details', 'created_by', 'created_at', 'updated_at', 'deleted_at'],
                'uploadfolder'      => '/uploads/calendar/calendar',
                'uploads'           => [
                                        'single'   => [],
                                        'multiple' => [],
                                   ],
                'casts'         => [
                                   ],
                'encrypt'       => ['id'],
                'translate'     => [],
                'perPage'       => '20',
           ],

];
