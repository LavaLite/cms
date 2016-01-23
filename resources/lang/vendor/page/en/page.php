<?php

return [
    'name'    => 'Page',
    'names'   => 'Pages',
    'options' => [
        'view'     => ['page' => 'Default', 'gallery' => 'Gallery'],
        'compiler' => [
        '' => 'none', 'php' => 'Php','blade' => 'Blade','twif' => 'Twig', ], ]
        ,
    'label' => [
        'id'          => 'ID',
        'order'       => 'Order',
        'banner'      => 'Banner',
        'status'      => 'Status',
        'name'        => 'Name',
        'view'        => 'View',
        'compiler'    => 'Compiler',
        'description' => 'Description',
        'heading'     => 'Heading',
        'content'     => 'Content',
        'title'       => 'Title',
        'slug'        => 'Url',
        'keyword'     => 'Keyword',
        'banner'      => 'Banner',
        'image'       => 'Image',
        'category'    => 'Category',
        'tags'        => 'Tags',
        ],
    'placeholder' => [
        'parent'      => 'Select',
        'order'       => 'Enter Order',
        'banner'      => 'Upload banner image',
        'status'      => 'Enter Status',
        'name'        => 'Enter Name',
        'view'        => 'Enter View',
        'compiler'    => 'Enter Compiler',
        'description' => 'Enter Description',
        'heading'     => 'Enter Heading',
        'content'     => 'Enter Content',
        'title'       => 'Enter Title',
        'keyword'     => 'Enter Keyword',
        'slug'        => 'Enter Url',
        'category'    => 'Select a category',
        'tags'        => 'Enter tags',
    ],
    'message' => [
        'nopage' => 'Page not found.',
    ],
    'tab' => [
        'page'    => 'Page',
        'setting' => 'Setting',
        'meta'    => 'Meta',
        'image'   => 'Image',
    ],
    'text' => [
        'preview' => 'Click on the below list for preview',
    ],
];
