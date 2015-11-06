<?php

return [

/*
* Provider .
*/
'provider' => 'lavalite',

/*
* Package .
*/
'package' => 'page',

/*
* Modules .
*/
'modules' => ['page', 'category'],

/*
* Compilers .
*/
'compiler' => ['none' => 'None', 'php' => 'Php', 'blade' => 'Blade', 'twig' => 'Twig'],

/*
* Views for the page  .
*/
'views' => ['page' => 'Default'],

'permissions' => ['page.view' => 'View', 'page.create' => 'Create', 'page.edit' => 'Edit', 'page.delete' => 'Delete'],

'image' => [
                        'xs' => ['width' => '60',     'height' => '45'],
                        'sm' => ['width' => '100',    'height' => '75'],
                        'md' => ['width' => '460',    'height' => '345'],
                        'lg' => ['width' => '800',    'height' => '600'],
                        'xl' => ['width' => '1000',   'height' => '750'],
                    ],

'page' => [
                        'table'    => 'pages',
                        'model'    => 'Lavalite\Page\Models\Page',
                        'fillable' => ['name', 'slug', 'order', 'view', 'compiler', 'status', 'upload_folder',
                                                 'heading', 'title', 'content', 'keyword', 'description', 'abstract', ],
                        'listfields' => ['id', 'name', 'category_id', 'slug', 'order', 'status', 'heading', 'title',
                                                'abstract', 'compiler', 'view', ],
                        'translatable'  => ['heading', 'content', 'title', 'keyword', 'description', 'images'],
                        'upload-folder' => '/uploads/page',
                        'uploadable'    => [
                                                    'single'   => ['banner'],
                                                    'multiple' => ['images'],
                                                ],
                ],
];
