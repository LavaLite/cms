var elixir = require('laravel-elixir');
var autoprefixer = require('gulp-autoprefixer');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        // Packages for admin module.
        .styles([
            './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
            './vendor/bower_components/font-awesome/css/font-awesome.min.css',
            './vendor/bower_components/simple-line-icons/css/simple-line-icons.css',
            './vendor/bower_components/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.min.css',
            './vendor/bower_components/datetimepicker/build/jquery.datetimepicker.min.css',
            './vendor/bower_components/toastr/toastr.min.css',
            './vendor/bower_components/dropzone/dist/dropzone.css',
            './vendor/bower_components/sweetalert/dist/sweetalert.css',
            './vendor/bower_components/summernote/dist/summernote.css',
            './vendor/bower_components/ionicons/css/ionicons.min.css',
            './vendor/bower_components/select2/dist/css/select2.min.css',
            './vendor/bower_components/waves/dist/waves.css',
            ], './public/themes/admin/assets/css/vendor.css')

        .scripts([
            './vendor/bower_components/jquery-ui/jquery-ui.js',
            './vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            './vendor/bower_components/DataTables/media/js/jquery.dataTables.js',
            './vendor/bower_components/datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.js',
            './vendor/bower_components/jquery-validation/dist/jquery.validate.js',
            './vendor/bower_components/moment/min/moment.min.js',
            './vendor/bower_components/datetimepicker/build/jquery.datetimepicker.full.js',
            './vendor/bower_components/toastr/toastr.js',
            './vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
            './vendor/bower_components/dropzone/dist/dropzone.js',
            './vendor/bower_components/summernote/dist/summernote.js',
            './vendor/bower_components/waves/dist/waves.js',
            './vendor/bower_components/Sortable/Sortable.min.js',
            './vendor/bower_components/select2/dist/js/select2.min.js',
            './vendor/bower_components/jquery-timeago/jquery.timeago.js',
        ], './public/themes/admin/assets/js/vendor.js')

        // Packages for user module.
        .styles([
            './vendor/bower_components/normalize.css/normalize.css',
            './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',            
            './vendor/bower_components/font-awesome/css/font-awesome.min.css',
            './vendor/bower_components/ionicons/css/ionicons.min.css',
            './vendor/bower_components/material-icons/css/material-icons.min.css',
            './vendor/bower_components/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.css',
            './vendor/bower_components/bootstrap-select/dist/css/bootstrap-select.css',
            './vendor/bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.css',
            './vendor/bower_components/bootstrap-material-design/dist/css/ripples.css',
            './vendor/bower_components/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.min.css',
            './vendor/bower_components/datetimepicker/build/jquery.datetimepicker.min.css',
            './vendor/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
            './vendor/bower_components/toastr/toastr.min.css',
            './vendor/bower_components/dropzone/dist/dropzone.css',
            './vendor/bower_components/sweetalert/dist/sweetalert.css',
            './vendor/bower_components/summernote/dist/summernote.css',
            './vendor/bower_components/select2/dist/css/select2.min.css',
            './vendor/bower_components/waves/dist/waves.css',
            ], './public/themes/user/assets/css/vendor.css')

        .scripts([
            './vendor/bower_components/jquery-ui/jquery-ui.js',
            './vendor/bower_components/moment/min/moment.min.js',
            './vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            './vendor/bower_components/bootstrap-select/dist/js/bootstrap-select.js',
            './vendor/bower_components/DataTables/media/js/jquery.dataTables.js',
            './vendor/bower_components/jquery-validation/dist/jquery.validate.js',
            './vendor/bower_components/toastr/toastr.js',
            './vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
            './vendor/bower_components/dropzone/dist/dropzone.js',
            './vendor/bower_components/summernote/dist/summernote.js',
            './vendor/bower_components/jquery-timeago/jquery.timeago.js',   
            './vendor/bower_components/datetimepicker/build/jquery.datetimepicker.full.js',
            './vendor/bower_components/bootstrap-switch/dist/js/bootstrap-switch.js',
            './vendor/bower_components/datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.js',
            './vendor/bower_components/bootstrap-material-design/dist/js/material.min.js',
            './vendor/bower_components/bootstrap-material-design/dist/js/ripples.js',
            './vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
            './vendor/bower_components/select2/dist/js/select2.min.js',
            './vendor/bower_components/Sortable/Sortable.js',
        ], './public/themes/user/assets/js/vendor.js')

        // Packages for public module.
        .styles([
            './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',        
            './vendor/bower_components/toastr/toastr.min.css',
            './vendor/bower_components/font-awesome/css/font-awesome.min.css',
            './vendor/bower_components/toastr/toastr.min.css',
            './vendor/bower_components/dropzone/dist/dropzone.css',
            './vendor/bower_components/ionicons/css/ionicons.min.css',
            './vendor/bower_components/datetimepicker/build/jquery.datetimepicker.min.css',
            './vendor/bower_components/summernote/dist/summernote.css',
            './vendor/bower_components/simple-line-icons/css/simple-line-icons.css',
            ], './public/themes/public/assets/css/vendor.css')

        .scripts([
            './vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            './vendor/bower_components/jquery-validation/dist/jquery.validate.js',
            './vendor/bower_components/dropzone/dist/dropzone.js',
            './vendor/bower_components/summernote/dist/summernote.js',
            './vendor/bower_components/toastr/toastr.js',
            './vendor/bower_components/datetimepicker/build/jquery.datetimepicker.full.js',
            './vendor/bower_components/jquery-timeago/jquery.timeago.js',
            './vendor/bower_components/Sortable/Sortable.js',
        ],  './public/themes/public/assets/js/vendor.js')

        
        //User assets
        .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.css', './public/themes/user/assets/packages/fullcalendar/fullcalendar.min.css')
        .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.js', './public/themes/user/assets/packages/fullcalendar/fullcalendar.min.js')
        .copy('./vendor/bower_components/fullcalendar/lang', './public/themes/user/assets/packages/fullcalendar/lang')
        .copy('./vendor/bower_components/jquery/dist/jquery.min.js', './public/themes/user/assets/packages/jquery/js/jquery.min.js')
        .copy('./vendor/bower_components/jquery/dist/jquery.min.map', './public/themes/user/assets/packages/jquery/js/jquery.min.map')

        //Public assets
        .copy('./vendor/bower_components/jquery/dist/jquery.min.js', './public/themes/public/assets/packages/jquery/js/jquery.min.js')
        .copy('./vendor/bower_components/jquery/dist/jquery.min.map', './public/themes/public/assets/packages/jquery/js/jquery.min.map')
        .copy('./vendor/bower_components/ionicons/fonts', './public/themes/public/assets/fonts')
        .copy('./vendor/bower_components/font-awesome/fonts', './public/themes/public/assets/fonts')
        .copy('./vendor/bower_components/simple-line-icons/fonts', './public/themes/public/assets/fonts')

        //Admin assets
        .copy('./vendor/bower_components/ionicons/fonts', './public/themes/admin/assets/fonts')
        .copy('./vendor/bower_components/font-awesome/fonts', './public/themes/admin/assets/fonts')
        .copy('./vendor/bower_components/simple-line-icons/fonts', './public/themes/admin/assets/fonts')

        .copy('./vendor/bower_components/DataTables/media/images', './public/themes/admin/assets/packages/data-tables/images')

        .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.css', './public/themes/admin/assets/packages/fullcalendar/fullcalendar.min.css')
        .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.js', './public/themes/admin/assets/packages/fullcalendar/fullcalendar.min.js')
        .copy('./vendor/bower_components/fullcalendar/lang', './public/themes/admin/assets/packages/fullcalendar/lang')

        .copy('./vendor/bower_components/nestable-2/jquery.nestable.css', './public/themes/admin/assets/packages/nestable/jquery.nestable.css')
        .copy('./vendor/bower_components/nestable-2/jquery.nestable.js', './public/themes/admin/assets/packages/nestable/jquery.nestable.js')

        .copy('./vendor/bower_components/jstree/dist', './public/themes/admin/assets/packages/jstree')

        .copy('./vendor/bower_components/select2/dist/css/select2.min.css', './public/themes/user/assets/packages/select2/css/select2.min.css')
        .copy('./vendor/bower_components/select2/dist/js/select2.min.js', './public/themes/user/assets/packages/select2/js/select2.min.js')



        .copy('./vendor/bower_components/cropper/dist/cropper.css', './public/themes/user/assets/packages/cropper/css/cropper.css')
        .copy('./vendor/bower_components/cropper/dist/cropper.js', './public/themes/user/assets/packages/cropper/js/cropper.js')




    	
});