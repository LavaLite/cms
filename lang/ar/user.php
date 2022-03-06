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
    'name'            => 'مستخدم',
    'names'           => 'مستخدمون',

    /*
    |--------------------------------------------------------------------------
    | User Repositiory Messages
    |--------------------------------------------------------------------------
    */

    'activated'             => "تم التفعيل. <a href=':url' class='alert-link'>يمكنك اﻵن تسجيل الدخول</a>",
    'alreadyactive'         => 'تم تفعيل هذا الحساب من قبل.',
    'backlogin'             => 'العودة لتسجيل الدخول',
    'banned'                => 'تم حظر النستخدم.',
    'changepword'           => 'تغيير كلمة المرور',
    'created'               => 'تم إناشء حسابك. افحص بريدك اﻹلكترونى من أجل بريد التأكيد.',
    'email'                 => 'البريد اﻹلكترونى',
    'emailconfirm'          => 'افحص بريدك من أجل رابط التأكيد.',
    'emailinfo'             => 'Check your email for instructions.',
    'emailpassword'         => 'تم تغيير كلمة المرور الخاصة بك. افحص بريدك من أجل كلمة المرور الجديدة.',
    'exists'                => 'المستخدم موجود بالفعل.',
    'forgot'                => 'نسيت كلمة المرور',
    'forgotupword'          => 'نسيت كلمة المرور.',
    'invalidinputs'         => 'المدخلات غير صحيحة.',
    'loginreq'              => 'حقل الدخول مطلوبة.',
    'minutes'               => 'دقائق',
    'newPassword'           => 'كلمة مرور جديدة',
    'noaccess'              => 'غير مسموح لك بفعل ذلك.',
    'notactivated'          => 'ﻻ يمكن إتمام عملة التفعيل.',
    'notfound'              => 'المستخدم غير موجود',
    'notupdated'            => 'ﻻ يمكن تعديل البروفايل',
    'oldPassword'           => 'كلمة المرور القديمة',
    'oldpassword'           => 'لم تقم بإدخال كلمة المرور الحالية بطريقة صحيحة.',
    'Password_confirmation' => 'تأكيد كلمة المرور',
    'passwordchg'           => 'تم تغيير كلمة المرور الخاصة بك.',
    'passwordprob'          => 'لم يتم تغيير كلمة المرور الخاصة بك.',
    'problem'               => 'يوجد مشكلة. من فضلم تواصل مع مدير النظام.',
    'profile_update'        => 'تم تحديث البروفايل الشخصى الخاص بك',
    'pword'                 => 'كلمة المرور',
    'remember'              => 'تذكرنى.',
    'resend'                => 'إعادة إرسال',
    'resendpword'           => 'إعادة إرسال كلمة المرور.',
    'reset'                 => 'إعادة تعيين كلمة المرور',
    'send'                  => 'إرسال',
    'signin'                => 'تسجيل الدخول',
    'suspend'               => 'موقوف',
    'suspended'             => 'المستخدم موقوف لـ :minutes دقائق.',
    'unbanned'              => 'تم فك الحظر عن المستخدم.',
    'unsuspended'           => 'تم فط الحظر.',
    'updated'               => 'تحديث البروفايل',
    'user'                  => 'مستخدم',
    'user'                  => [
    'options'          => [
                        'sex'                 => ['male'  => 'ذكر', 'female' => 'أنثى'],
                        'type'                => ['admin' => 'أدمن', 'user' => 'مستخدم', 'superuser' => 'سوبر يوزر'],
                        'reporting_to'        => ['1'],
                        'department'          => ['marketing' => 'تسوق', 'accounts' => 'حسابات', 'store' => 'مخزن'],
                        ],

    'label'             => [
                        'reporting_to'                 => 'تقديم التقارير إلى',
                        'designation'                  => 'التسمية',
                        'department'                   => 'قسم',
                        'name'                         => 'اسم',
                        'password'                     => 'كلمة المورو',
                        'password_confirmation'        => 'تأكيد كلمة المرور',
                        'current_password'             => 'كلمة المرور الحالية',
                        'new_password'                 => 'كلمة المرور الجديدة',
                        'new_password_confirmation'    => 'تأكيد كلمة المرور الجديدة',
                        'first_name'                   => 'اﻻسم اﻷول',
                        'last_name'                    => 'اسم العائلة',
                        'sex'                          => 'الجنس',
                        'date_of_birth'                => 'تاريخ الميﻻد',
                        'photo'                        => 'صورة',
                        'mobile'                       => 'الموبايل',
                        'phone'                        => 'الهاتف',
                        'address'                      => 'العنوان',
                        'street'                       => 'الشارع',
                        'city'                         => 'المدينة',
                        'district'                     => 'الحى',
                        'state'                        => 'الوﻻية',
                        'country'                      => 'البلد',
                        'web'                          => 'ويب',
                        'email'                        => 'البريد اﻹلكترونى',
                        'type'                         => 'النوع',
                        'dob'                          => 'تاريخ الميﻻد',
                        'designation'                  => 'التسمية',
                        'activated'                    => 'فعال',
                        'status'                       => 'الحالة',
                        'minutes'                      => 'مدة',
                        'login'                        => 'تسجيل الدخول',
                        ],

    'placeholder'       => [

                        'reporting_to'                 => 'اختر',
                        'email'                        => 'ادخل البريد اﻹلكترونى',
                        'name'                         => 'ادخل اﻻسم',
                        'department'                   => 'القسم',
                        'password'                     => 'ادخل كلمة المرور',
                        'password_confirmation'        => 'أعدل إدخل كلمة المرور',
                        'current_password'             => 'من فضلك أدخل كلمة المرور الحالية',
                        'new_password'                 => 'من فضلك أدخل كلمة مرور جديدة',
                        'new_password_confirmation'    => 'من فضلك أدخل كلمة المرور الجديد مرة ثانية',
                        'first_name'                   => 'ادخل اﻻسم اﻷول',
                        'last_name'                    => 'ادخل اسم العائلة',
                        'sex'                          => 'اختر الجنس',
                        'date_of_birth'                => 'ادخل تاريخ الميﻻد',
                        'photo'                        => 'صورة',
                        'mobile'                       => 'ادخل الموبايل',
                        'phone'                        => 'ادخل الهاتف',
                        'address'                      => 'ادخل العنوان',
                        'street'                       => 'ادخل الشارع',
                        'city'                         => 'ادخل المدينة',
                        'district'                     => 'ادخل الحى',
                        'activated'                    => 'التفعيل',
                        'type'                         => 'النوع',
                        'dob'                          => 'تاريخ الميﻻد',
                        'designation'                  => 'التسمية',
                        'state'                        => 'ادخل الوﻻية',
                        'country'                      => 'ادخل البلد',
                        'web'                          => 'ادلخ الويب',
                        'minutes'                      => 'دقائق',
                        ],

                        'name'              => 'مستخدم',
                        'names'             => 'مستخدمون',

    // Tab labels
    'tab' => [
            'name'  => 'اسم',
    ],

    // Texts  for the module
    'text' => [
        'preview' => 'انقر فوق أسفل القائمة للمعاينة',
    ],
],
    'role' => [

        'options'  => [

        ],

        'placeholder' => [

           'id'                 => 'ادخل اﻵى دى',
            'name'              => 'ادخل اﻻسم',
            'created_at'        => 'ادخل تاريخ اﻹنشاء',
            'updated_at'        => 'ادخل تاريخ التعديل',

        ],

        'label' => [
            'id'                => 'آى دى',
            'name'              => 'اﻻسم',
            'created_at'        => 'تاريخ اﻹنشاء',
            'updated_at'        => 'تاريخ التعديل',
        ],

        'name'            => 'الدور',
        'names'           => 'اﻷدوار',

        // Tab labels
        'tab' => [
                'name'  => 'اﻻسم',
        ],

        // Texts  for the module
        'text' => [
            'preview' => 'انقر فوق أسفل القائمة للمعاينة',
        ],
    ],
    'permission' => [

        'options'  => [

        ],

        'placeholder' => [

           'id'            => 'ادخل اﻵى دى',
    'name'                 => 'ادخل اﻻسم',
    'slug'                 => 'ادخل السلج',
    'created_at'           => 'ادخل تاريخ اﻹنشاء',
    'updated_at'           => 'ادخل تاريخ التعديل',

        ],

        'label' => [

            'id'           => 'آى دى',
    'name'                 => 'اﻻسم',
    'slug'                 => 'السلج',
    'created_at'           => 'تاريخ اﻹنشاء',
    'updated_at'           => 'تاريخ التعديل',
        ],

        'name'            => 'تصريح',
        'names'           => 'تصاريح',

        // Tab labels
        'tab' => [
                'name'  => 'اﻻسم',
        ],

        // Texts  for the module
        'text' => [
            'preview' => 'انقر فوق أسفل القائمة للمعاينة',
        ],
    ],
];
