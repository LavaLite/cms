<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Views
    |--------------------------------------------------------------------------
    |
    | The default views that the file uploader will use.
    |
    */

    'views' => array(
                    'upload' => 'File::upload',
                    'list' => 'File::list',
                    'drop' => 'File::dropzone',
                    ),
    /*
    |--------------------------------------------------------------------------
    | Model
    |--------------------------------------------------------------------------
    |
    | Model the Uploader will use.
    | Default : Upload
    |
    */

    'model' => 'Lavalite\Filer\File',


    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    |
    | Table the Uploader will use.
    | Default : uploads
    |
    */

    'table' => 'filer',

    /*
    |--------------------------------------------------------------------------
    | Upload Folder
    |--------------------------------------------------------------------------
    |
    | Folder the Uploader will use.
    | This will need to writable by the web server.
    | Default : public/packages/andrew13/cabinet/uploads/
    | Recommendation: public/uploads/
    |
    */

    'folder' => 'packages/:provider/:package/:module/:id/:category',

    'folder_permission' => 0777, // Default 0777 - Other likely values 0775, 0755


    /*
    |--------------------------------------------------------------------------
    | Upload Filer
    |--------------------------------------------------------------------------
    |
    | Configuration items for uploaded filer.
    |
    */

    'allowed_types' => array('image/png','image/gif','image/jpg','image/jpeg'),
    'allowed_extensions' => array('png','gif','jpg','jpeg','pdf','doc','docx','xls','xlsx','mp3','txt','zip','bmp','jpeg'), // Case insensitive

    // Max upload size - In BYTES. 1GB = 1073741824 bytes, 10 MB = 10485760, 1 MB = 1048576
    'max_upload_size' => 10485760, // Converter - http://www.beesky.com/newsite/bit_byte.htm

    // [True] will change all uploaded file names to an obfuscated name. (Example_Image.jpg becomes Example_Image_p4n8wfnt8nwh5gc7ynwn8gtu4se8u.jpg)
    // [False] attempts to leaves the filename as is.
    'obfuscate_filenames' => false, // True/False

    /*
    |--------------------------------------------------------------------------
    | Image
    |--------------------------------------------------------------------------
    |
    | Configuration items for image filer.
    |
    */

    // Enabled image manipulation for uploaded images.
    'image_manipulation' => true,

    // Must be in the upload list as well.
    // Must also be supported by invention. http://intervention.olivervogel.net/image/formats/image
    'image_types' => array('image/png','image/gif','image/jpg','image/jpeg'),
    'image_extensions' => array('png','gif','jpg','jpeg'), // Case insensitive

    'image_max_size' => array('w' => 4000, 'h' => 4000),
    'image_resize_on_upload' => true,
    // Image resizing params. http://intervention.olivervogel.net/image/methods/resize
    'image_resize' => array(
        array(300, 200), // 300x200 image
        array(300, 200, true), // 300x200 image ratio constrained aspect ratio
        array(null, 400, true), // auto width x 400 height constrained aspect ratio
    ),
    'size'         => [
            'xs'            => ['width' =>'60',     'height' =>'45', 'default' => 'path-to-banner-set-it-in-page-config'],
            'sm'            => ['width' =>'160',    'height' =>'75'],
            'md'            => ['width' =>'460',    'height' =>'345'],
            'lg'            => ['width' =>'800',    'height' =>'600'],
            'xl'            => ['width' =>'1000',   'height' =>'750'],
    ],
);