<?php
return array(
/**
* Provider .
*/
'provider'   => 'lavalite',
/**
* Package .
*/
'package'    => 'menu',
/**
* Modules .
*/
'modules'    => ['menu'],

'menu'      => [
                'name'          => 'Menu',
                'table'         => 'menus',
                'model'         => 'Lavalite\Menu\Models\Menu',
                'permissions'   => ['admin'     => ['view', 'create', 'edit', 'delete']],
                'image'         => [
                                        'xs'        => ['width' =>'60',     'height' =>'45', 'default' => ''],
                                        'sm'        => ['width' =>'160',    'height' =>'75'],
                                        'md'        => ['width' =>'460',    'height' =>'345'],
                                        'lg'        => ['width' =>'800',    'height' =>'600'],
                                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                                    ],
                'fillable'          =>  ['name','url','order','status', 'icon', 'description','has_sub','type','open','key'],
                'listfields'        =>  ['id', 'name', 'level', 'url','order', 'icon', 'status', 'has_sub','type','open','key'],
                'upload-folder'     =>  'uploads/menu',
                'uploadable'        =>  [
                                            'single' => [],
                                            'multiple' => []
                                        ],
               ]
);