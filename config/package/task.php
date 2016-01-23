<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'task',

/*
* Modules .
*/
'modules'   => [],

// Modale variables for task module.
'task' => [
                'model'         => 'Lavalite\Task\Models\Task',
                'table'         => 'tasks',
                'primaryKey'    => 'id',
                'hidden'        => [],
                'visible'       => [],
                'guarded'       => ['*'],
                'slugs'         => ['slug' => 'name'],
                'dates'         => ['deleted_at'],
                'appends'       => ['id'],
                'fillable'      => ['task', 'start', 'end'],
                'listfields'    => ['task', 'start', 'end'],
                'uploadfolder'  => '/uploads/task',
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
