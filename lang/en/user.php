<?php

return [
    'package' => [
        'name' => 'User',
        'names' => 'Users',

    ],
    'user' => [
        /*
        |--------------------------------------------------------------------------
        | Language files for user in users package
        |--------------------------------------------------------------------------
        |
        | The following language lines are  for  user module in users package
        | and it is used by the template/view files in this module
        |
         */

        /**
         * Singlular and plural name of the module
         */
        'name' => 'User',
        'names' => 'Users',
        'icon' => 'las la-list',

        /**
         * Singlular and plural name of the module
         */
        'title' => [
            'main' => 'Users',
            'sub' => 'Users',
            'profile' => 'Profile',
            'password' => 'Password',
            'change_password' => 'Change password',
        ],

        /**
         * Singlular and plural name of the module
         */
        'groups' => [
            'main' => 'Main',
            'images' => 'Images',
            'details' => 'Details',
            'settings' => 'Settings',
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
            'sex' => ['', 'Male', 'Female'],
            'status' => ['New', 'Active', 'Suspended', 'Locked'],
        ],

        /**
         * Placeholder for inputs
         */
        'placeholder' => [
            'id' => 'Please enter id',
            'reporting_to' => 'Please enter reporting to',
            'team_id' => 'Please enter team id',
            'name' => 'Please enter name',
            'email' => 'Please enter email',
            'password' => 'Please enter password',
            'current_password' => 'Please enter current password',
            'new_password' => 'Please enter new password',
            'new_password_confirmation' => 'Please enter confirm new password',
            'api_token' => 'Please enter api token',
            'remember_token' => 'Please enter remember token',
            'sex' => 'Please select sex',
            'dob' => 'Please select dob',
            'doj' => 'Please select doj',
            'designation' => 'Please enter designation',
            'mobile' => 'Please enter mobile',
            'phone' => 'Please enter phone',
            'address' => 'Please enter address',
            'street' => 'Please enter street',
            'city' => 'Please enter city',
            'district' => 'Please enter district',
            'state' => 'Please enter state',
            'country' => 'Please enter country',
            'zipcode' => 'Please enter zip code',
            'photo' => 'Please enter photo',
            'web' => 'Please enter web',
            'urls' => 'Please enter urls',
            'status' => 'Please select status',
            'email_verified_at' => 'Please select email verified at',
            'user_id' => 'Please enter user id',
            'user_type' => 'Please enter user type',
            'upload_folder' => 'Please enter upload folder',
            'deleted_at' => 'Please select deleted at',
            'created_at' => 'Please select created at',
            'updated_at' => 'Please select updated at',
        ],

        /**
         * Labels for inputs.
         */
        'label' => [
            'id' => 'Id',
            'reporting_to' => 'Reporting to',
            'team_id' => 'Team id',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'current_password' => 'Current password',
            'new_password' => 'New password',
            'new_password_confirmation' => 'Confirm new password',
            'api_token' => 'Api token',
            'remember_token' => 'Remember token',
            'sex' => 'Sex',
            'dob' => 'Dob',
            'doj' => 'Doj',
            'designation' => 'Designation',
            'mobile' => 'Mobile',
            'phone' => 'Phone',
            'address' => 'Address',
            'street' => 'Street',
            'city' => 'City',
            'district' => 'District',
            'state' => 'State',
            'country' => 'Country',
            'zipcode' => 'Zip code',
            'photo' => 'Photo',
            'web' => 'Web',
            'urls' => 'Urls',
            'status' => 'Status',
            'email_verified_at' => 'Email verified at',
            'user_id' => 'User id',
            'user_type' => 'User type',
            'upload_folder' => 'Upload folder',
            'deleted_at' => 'Deleted at',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],

    'client' => [
        /*
        |--------------------------------------------------------------------------
        | Language files for client in users package
        |--------------------------------------------------------------------------
        |
        | The following language lines are  for  client module in users package
        | and it is used by the template/view files in this module
        |
         */

        /**
         * Singlular and plural name of the module
         */
        'name' => 'Client',
        'names' => 'Clients',
        'icon' => 'las la-list',

        /**
         * Singlular and plural name of the module
         */
        'title' => [
            'main' => 'Clients',
            'sub' => 'Clients',
        ],

        /**
         * Singlular and plural name of the module
         */
        'groups' => [
            'main' => 'Main',
            'images' => 'Images',
            'details' => 'Details',
            'settings' => 'Settings',
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
            'sex' => ['', 'Male', 'Female'],
            'status' => ['New', 'Active', 'Suspended', 'Locked'],
        ],

        /**
         * Placeholder for inputs
         */
        'placeholder' => [
            'id' => 'Please enter id',
            'reporting_to' => 'Please enter reporting to',
            'name' => 'Please enter name',
            'email' => 'Please enter email',
            'password' => 'Please enter password',
            'current_password' => 'Please enter current password',
            'new_password' => 'Please enter new password',
            'new_password_confirmation' => 'Please enter confirm new password',
            'api_token' => 'Please enter api token',
            'remember_token' => 'Please enter remember token',
            'sex' => 'Please select sex',
            'dob' => 'Please select dob',
            'designation' => 'Please enter designation',
            'mobile' => 'Please enter mobile',
            'phone' => 'Please enter phone',
            'address' => 'Please enter address',
            'street' => 'Please enter street',
            'city' => 'Please enter city',
            'district' => 'Please enter district',
            'state' => 'Please enter state',
            'country' => 'Please enter country',
            'photo' => 'Please enter photo',
            'web' => 'Please enter web',
            'permissions' => 'Please enter permissions',
            'status' => 'Please select status',
            'email_verified_at' => 'Please select email verified at',
            'user_id' => 'Please enter user id',
            'user_type' => 'Please enter user type',
            'upload_folder' => 'Please enter upload folder',
            'deleted_at' => 'Please select deleted at',
            'created_at' => 'Please select created at',
            'updated_at' => 'Please select updated at',
        ],

        /**
         * Labels for inputs.
         */
        'label' => [
            'id' => 'Id',
            'reporting_to' => 'Reporting to',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'current_password' => 'Current password',
            'new_password' => 'New password',
            'new_password_confirmation' => 'Confirm new password',
            'api_token' => 'Api token',
            'remember_token' => 'Remember token',
            'sex' => 'Sex',
            'dob' => 'Dob',
            'designation' => 'Designation',
            'mobile' => 'Mobile',
            'phone' => 'Phone',
            'address' => 'Address',
            'street' => 'Street',
            'city' => 'City',
            'district' => 'District',
            'state' => 'State',
            'country' => 'Country',
            'photo' => 'Photo',
            'web' => 'Web',
            'permissions' => 'Permissions',
            'status' => 'Status',
            'email_verified_at' => 'Email verified at',
            'user_id' => 'User id',
            'user_type' => 'User type',
            'upload_folder' => 'Upload folder',
            'deleted_at' => 'Deleted at',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
];
