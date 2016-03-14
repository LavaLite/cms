<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Label language files for Menus Module
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default labels for menus module,
    | and it is used by the template/view files in this module
    |
    */
    'name'            => 'User',
    'names'           => 'Users',

    /*
    |--------------------------------------------------------------------------
    | User Repositiory Messages
    |--------------------------------------------------------------------------
    */

    'activated'             => "Activation complete. <a href=':url' class='alert-link'>You may now login</a>",
    'alreadyactive'         => 'That account has already been activated.',
    'backlogin'             => 'Back to login',
    'banned'                => 'User has been banned.',
    'changepword'           => 'Change password',
    'created'               => 'Your account has been created. Check your email for the confirmation link.',
    'email'                 => 'E-mail Address',
    'emailconfirm'          => 'Check your email for the confirmation link.',
    'emailinfo'             => 'Check your email for instructions.',
    'emailpassword'         => 'Your password has been changed. Check your email for the new password.',
    'exists'                => 'User already exists.',
    'forgot'                => 'Forgot password',
    'forgotupword'          => 'Forgot password.',
    'invalidinputs'         => 'Invalid inputs.',
    'loginreq'              => 'Login field required.',
    'minutes'               => 'Minutes',
    'newPassword'           => 'New Password',
    'noaccess'              => 'You are not allowed to do that.',
    'notactivated'          => 'Activation could not be completed.',
    'notfound'              => 'User not found',
    'notupdated'            => 'Unable to update profile',
    'oldPassword'           => 'Old Password',
    'oldpassword'           => 'You did not provide the correct original password.',
    'Password_confirmation' => 'Confirm Password',
    'passwordchg'           => 'Your password has been changed.',
    'passwordprob'          => 'Your password could not be changed.',
    'problem'               => 'There was a problem. Please contact the system administrator.',
    'profile_update'        => 'Your profile has been updated',
    'pword'                 => 'Password',
    'remember'              => 'Remember me.',
    'resend'                => 'Resend',
    'resendpword'           => 'Resend password.',
    'reset'                 => 'Reset password',
    'send'                  => 'Send',
    'signin'                => 'Sign In',
    'suspend'               => 'Suspend',
    'suspended'             => 'User has been suspended for :minutes minutes.',
    'unbanned'              => 'User has been unbanned.',
    'unsuspended'           => 'Suspension removed.',
    'updated'               => 'Profile updated',
    'user'                  => 'User',
    'user'                  => [
    'options'          => [
                        'sex'                 => ['male'  => 'Male', 'female' => 'Female'],
                        'type'                => ['admin' => 'Admin', 'user' => 'User', 'superuser' => 'Super user'],
                        'reporting_to'        => ['1'],
                        'department'          => ['marketing' => 'Marketing', 'accounts' => 'Accounts', 'store' => 'Store'],
                        ],

    'label'             => [
                        'reporting_to'                 => 'Reporting to',
                        'designation'                  => 'Designation',
                        'department'                   => 'Department',
                        'name'                         => 'Name',
                        'password'                     => 'Password',
                        'password_confirmation'        => 'Confirm Password',
                        'current_password'             => 'Current password',
                        'new_password'                 => 'New Password',
                        'new_password_confirmation'    => 'Confirm New Password',
                        'first_name'                   => 'First Name',
                        'last_name'                    => 'Last Name',
                        'sex'                          => 'Sex',
                        'date_of_birth'                => 'Date of Birth',
                        'photo'                        => 'Photo',
                        'mobile'                       => 'Mobile',
                        'phone'                        => 'Phone',
                        'address'                      => 'Address',
                        'street'                       => 'Street',
                        'city'                         => 'City',
                        'district'                     => 'District',
                        'state'                        => 'State',
                        'country'                      => 'Country',
                        'web'                          => 'Web',
                        'email'                        => 'E-mail Address',
                        'type'                         => 'Type',
                        'dob'                          => 'Date of Birth',
                        'designation'                  => 'Designation',
                        'activated'                    => 'Active',
                        'status'                       => 'Status',
                        'minutes'                      => 'Duration',
                        'login'                        => 'Login',
                        ],

    'placeholder'       => [

                        'reporting_to'                 => 'Select',
                        'email'                        => 'Enter E-mail Address',
                        'name'                         => 'Enter Name',
                        'department'                   => 'Department',
                        'password'                     => 'Entrer Password',
                        'password_confirmation'        => 'Re-enter Password',
                        'current_password'             => 'Please enter current password',
                        'new_password'                 => 'Please new password',
                        'new_password_confirmation'    => 'Please enter new password again',
                        'first_name'                   => 'Enter First Name',
                        'last_name'                    => 'Enter Last Name',
                        'sex'                          => 'Select sex',
                        'date_of_birth'                => 'Enter Date of Birth',
                        'photo'                        => 'Photo',
                        'mobile'                       => 'Enter Mobile',
                        'phone'                        => 'Enter Phone',
                        'address'                      => 'Enter Address',
                        'street'                       => 'Enter Street',
                        'city'                         => 'Enter City',
                        'district'                     => 'Enter District',
                        'activated'                    => 'Active',
                        'type'                         => 'Type',
                        'dob'                          => 'Date of Birth',
                        'designation'                  => 'Designation',
                        'state'                        => 'Enter State',
                        'country'                      => 'Enter Country',
                        'web'                          => 'Enter Web',
                        'minutes'                      => 'Minutes',
                        ],

                        'name'              => 'User',
                        'names'             => 'Users',

    // Tab labels
    'tab' => [
            'name'  => 'Name',
    ],

    // Texts  for the module
    'text' => [
        'preview' => 'Click on the below list for preview',
    ],
],
    'role' => [

        'options'  => [

        ],

        'placeholder' => [

           'id'                 => 'Enter Id',
            'name'              => 'Enter Name',
            'created_at'        => 'Enter Created at',
            'updated_at'        => 'Enter Updated at',

        ],

        'label' => [
            'id'                => 'Id',
            'name'              => 'Name',
            'created_at'        => 'Created at',
            'updated_at'        => 'Updated at',
        ],

        'name'            => 'Role',
        'names'           => 'Roles',

        // Tab labels
        'tab' => [
                'name'  => 'Name',
        ],

        // Texts  for the module
        'text' => [
            'preview' => 'Click on the below list for preview',
        ],
    ],
    'permission' => [

        'options'  => [

        ],

        'placeholder' => [

           'id'            => 'Enter Id',
    'name'                 => 'Enter Name',
    'slug'                 => 'Enter slug',
    'created_at'           => 'Enter Created at',
    'updated_at'           => 'Enter Updated at',

        ],

        'label' => [

            'id'           => 'Id',
    'name'                 => 'Name',
    'slug'                 => 'Slug',
    'created_at'           => 'Created at',
    'updated_at'           => 'Updated at',
        ],

        'name'            => 'Permission',
        'names'           => 'Permissions',

        // Tab labels
        'tab' => [
                'name'  => 'Name',
        ],

        // Texts  for the module
        'text' => [
            'preview' => 'Click on the below list for preview',
        ],
    ],
];
