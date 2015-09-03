<?php

return [
/**
* Provider .
*/
'provider'  => 'lavalite',

/**
* Package .
*/
'package'   => 'example',

/**
* Modules .
*/
 'example' =>  [
        'Name'          => 'Example',
        'name'          => 'example',
        'table'         => 'examples',
        'model'         => 'Lavalite\Example\Models\Example',
        'permissions'   => ['view', 'create', 'edit', 'delete'],
        'image'         =>
            [
            'xs'        => ['width' =>'60',     'height' =>'45'],
            'sm'        => ['width' =>'100',    'height' =>'75'],
            'md'        => ['width' =>'460',    'height' =>'345'],
            'lg'        => ['width' =>'800',    'height' =>'600'],
            'xl'        => ['width' =>'1000',   'height' =>'750'],
            ],
        'fillable'          =>  ['id', 'name', 'email', 'color', 'date', 'datetime', 'file', 'files', 'image', 'images', 'month', 'password', 'range', 'search', 'tel', 'time', 'url', 'week', 'date_picker', 'time_picker', 'date_time_picker', 'radios', 'checkboxes', 'switch', 'select', 'model_select', 'textarea', 'html_editor'],
        'listfields'        =>  ['id', 'name'],
        'translatable'      =>  ['id', 'name', 'email', 'color', 'date', 'datetime', 'file', 'files', 'image', 'images', 'month', 'password', 'range', 'search', 'tel', 'time', 'url', 'week', 'date_picker', 'time_picker', 'date_time_picker', 'radios', 'checkboxes', 'switch', 'select', 'model_select', 'textarea', 'html_editor', 'deleted_at', 'created_at', 'updated_at'],
        'upload-folder'     =>  '/uploads/examples',
        'uploadable'        =>  [
                                    'single' => [],
                                    'multiple' => []
                                ],

]
];
