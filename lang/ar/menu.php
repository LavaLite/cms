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
    'name'          => 'قائمة',
    'names'         => 'قوائم',
    'subname'       => 'قائمة فرعية',

    'options'       => [
        'status'            => [
            '1' => 'عرض',
            '0' => 'إخفاء',
            ],
        'open'          => [
            '_blank'            => 'نفس النافذة',
            '_self'             => 'نافذة جديدة',
            ],
        'type'          => [
            'wsm'       => 'بدون قائمة فرعية',
            'wos'       => 'بقائمة فرعية',
            ],
        ],
    'placeholder' => [
        'parent'        => 'ادخل اسم اﻷب',
        'uname'         => 'ادخل اسمك',
        'url'           => 'ادخل الرابط',
        'status'        => 'ادخل الحالة',
        'order'         => 'ادخل الترتيب',
        'open'          => 'Enter Open',
        'type'          => 'ادخل النوع',
        'name'          => 'ادخل اﻻسم',
        'description'   => 'ادخل الوصف',
        'key'           => 'ادخل المفتاح',
        'icon'          => 'ادخل كﻻس اﻷيقون',
    ],
    'label' => [
        'parent_id'     => 'اﻷب',
        'uname'         => 'اسمك',
        'url'           => 'الرابط',
        'status'        => 'الحالة',
        'order'         => 'ترتيب القائمة',
        'open'          => 'افتح بـ',
        'type'          => 'نوع القائمة',
        'name'          => 'اﻻسم',
        'description'   => 'الوصف',
        'key'           => 'المفتاح',
        'has_sub'       => 'لديه فرع',
        'icon'          => 'أيقون',
        'submenu'       => 'قائمة فرعية',
    ],
];
