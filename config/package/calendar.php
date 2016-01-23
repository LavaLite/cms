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
'modules'   => [],

// Modale variables for calendar module.
'calendar' => [
                'model'         => 'Lavalite\Calendar\Models\Calendar',
                'table'         => 'calendars',
                'primaryKey'    => 'id',
                'hidden'        => [],
                'visible'       => [],
                'guarded'       => ['*'],
                'slugs'         => ['slug' => 'name'],
                'dates'         => ['deleted_at'],
                'appends'       => ['id'],
                'fillable'      => ['calendar', 'start', 'end'],
                'listfields'    => ['calendar', 'start', 'end'],
                'uploadfolder'  => '/uploads/calendar',
                'uploads'       => [
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
