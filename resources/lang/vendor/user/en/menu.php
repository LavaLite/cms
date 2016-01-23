<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for Menus Module
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default for menus module,
    | and it is used by the /view files in this module
    |
    */
    'name'          => 'Menu',
    'names'         => 'Menus',
    'subname'       => 'Sub Menu',

    'options'       => [
        'status'            => [
            '1' => 'Show',
            '0' => 'Hide',
            ],
        'open'          => [
            '_blank'            => 'Same window',
            '_self'             => 'New window',
            ],
        'type'          => [
            'wsm'       => 'Without sub menu',
            'wos'       => 'With sub menu',
            ],
        ],
    'placeholder' => [
        'parent'        => 'Enter Parent',
        'uname'         => 'Enter Uname',
        'url'           => 'Enter url',
        'status'        => 'Enter Status',
        'order'         => 'Enter Order',
        'open'          => 'Enter Open',
        'type'          => 'Enter Type',
        'name'          => 'Enter Name',
        'description'   => 'Enter Description',
        'key'           => 'Enter Key',
        'icon'          => 'Enter Icon Class',
    ],
    'label' => [
        'parent_id'     => 'Parent',
        'uname'         => 'Uname',
        'url'           => 'Url',
        'status'        => 'Status',
        'order'         => 'Menu Order',
        'open'          => 'Open With',
        'type'          => 'Menu Type',
        'name'          => 'Name',
        'description'   => 'Description',
        'key'           => 'Key',
        'has_sub'       => 'Has Sub',
        'icon'          => 'Icon',
        'submenu'       => 'Sub menu',
    ],
];
