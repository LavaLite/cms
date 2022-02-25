<?php

return [
    'package' => [
        'name' => 'Master',
        'names' => 'Masters',

    ],
    'master' => [
        /*
        |--------------------------------------------------------------------------
        | Language files for master in master package
        |--------------------------------------------------------------------------
        |
        | The following language lines are  for  master module in master package
        | and it is used by the template/view files in this module
        |
         */

        /**
         * Singlular and plural name of the module
         */
        'name' => 'Master',
        'names' => 'Masters',
        'icon' => 'las la-list',

        /**
         * Singlular and plural name of the module
         */
        'title' => [
            'main' => 'Masters',
            'sub' => 'Masters',
        ],

        /**
         * Singlular and plural name of the module
         */
        'groups' => [
            'master' => [
                'name' => 'Master',
                'title' => 'List of masters',
            ],
            'project' => [
                'name' => 'Projects',
                'title' => 'Project masters',
            ],
        ],
        /**
         * List of masters used in the project.
         */
        'masters' => [
            'single' => 'Single',
            'category' => 'Category Style',
            'image' => 'With Image',
            'icon' => 'With Icon',
            'country' => 'country',
            'state' => 'State',
            'city' => 'City',
            'location' => 'Location',
            'project' => 'Project',
        ],
        /**
         * Form sub section name for the module.
         */
        'sections' => [
            'main' => 'Main',
            'details' => 'Details',
        ],

        /**
         * Options for select/radio/check.
         */
        'options' => [
            'status' => ['Show', 'Hide'],
        ],

        /**
         * Placeholder for inputs
         */
        'placeholder' => [
            'id' => 'Please enter id',
            'parent_id' => 'Please enter parent id',
            'type' => 'Please enter type',
            'name' => 'Please enter name',
            'code' => 'Please enter code',
            'amount' => 'Please enter amount',
            'abbr' => 'Please enter abbr',
            'description' => 'Please enter description',
            'icon' => 'Please enter icon',
            'image' => 'Please enter image',
            'images' => 'Please enter images',
            'file' => 'Please enter file',
            'order' => 'Please enter order',
            'status' => 'Please select status',
            'extras' => 'Please enter extras',
            'slug' => 'Please enter slug',
            'deleted_at' => 'Please select deleted at',
            'created_at' => 'Please select created at',
            'updated_at' => 'Please select updated at',
        ],

        /**
         * Labels for inputs.
         */
        'label' => [
            'id' => 'Id',
            'parent_id' => 'Parent id',
            'type' => 'Type',
            'name' => 'Name',
            'code' => 'Code',
            'amount' => 'Amount',
            'abbr' => 'Abbr',
            'description' => 'Description',
            'icon' => 'Icon',
            'image' => 'Image',
            'images' => 'Images',
            'file' => 'File',
            'order' => 'Order',
            'status' => 'Status',
            'extras' => 'Extras',
            'slug' => 'Slug',
            'deleted_at' => 'Deleted at',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
];
