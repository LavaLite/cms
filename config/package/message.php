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

// Modale variables for message module.
'message' => [
                'model'         => 'Lavalite\Messahe\Models\Messahe',
                'table'         => 'messages',
                'primaryKey'    => 'id',
                'hidden'        => [],
                'visible'       => [],
                'guarded'       => ['*'],
                'slugs'         => ['slug' => 'name'],
                'dates'         => ['deleted_at'],
                'appends'       => ['id'],
                'fillable'      => ['message', 'start', 'end'],
                'listfields'    => ['message', 'start', 'end'],
                'uploadfolder'  => '/uploads/message',
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
