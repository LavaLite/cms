var elixir = require('laravel-elixir');

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
        .styles([
            './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
            './vendor/bower_components/font-awesome/css/font-awesome.min.css',
            './vendor/bower_components/simple-line-icons/css/simple-line-icons.css',
            './vendor/bower_components/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.min.css',
            './vendor/bower_components/pickadate/lib/themes/classic.css',
            './vendor/bower_components/pickadate/lib/themes/classic.time.css',
            './vendor/bower_components/pickadate/lib/themes/classic.date.css',
            './vendor/bower_components/toastr/toastr.min.css',
            './vendor/bower_components/dropzone/dist/dropzone.css',
            './vendor/bower_components/sweetalert/dist/sweetalert.css',
            './vendor/bower_components/summernote/dist/summernote.css',
            './vendor/bower_components/ionicons/css/ionicons.min.css',
            './vendor/bower_components/waves/dist/waves.css',
            ], './public/css/vendor_admin.css', './public/css')

        .scripts([
            './vendor/bower_components/jquery-ui/jquery-ui.js',
            './vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            './vendor/bower_components/DataTables/media/js/jquery.dataTables.js',
            './vendor/bower_components/datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.js',
            './vendor/bower_components/jquery-validation/dist/jquery.validate.js',
            './vendor/bower_components/moment/min/moment.min.js',
            './vendor/bower_components/pickadate/lib/picker.js',
            './vendor/bower_components/pickadate/lib/picker.time.js',
            './vendor/bower_components/pickadate/lib/picker.date.js',
            './vendor/bower_components/toastr/toastr.js',
            './vendor/bower_components/Sortable/Sortable.js',
            './vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
            './vendor/bower_components/dropzone/dist/dropzone.js',
            './vendor/bower_components/summernote/dist/summernote.js',
            './vendor/bower_components/waves/dist/waves.js',
            './vendor/bower_components/Sortable/Sortable.min.js',

            './vendor/bower_components/jquery-timeago/jquery.timeago.js',
        ], './public/js/vendor_admin.js', './public/js')

        .styles([
            './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
            './vendor/bower_components/summernote/dist/summernote.css',
            './vendor/bower_components/sweetalert/dist/sweetalert.css',
            './vendor/bower_components/toastr/toastr.min.css',
            './vendor/bower_components/dropzone/dist/dropzone.css',
            './vendor/bower_components/waves/dist/waves.css',
            './vendor/bower_components/pickadate/lib/themes/classic.css',
            './vendor/bower_components/pickadate/lib/themes/classic.time.css',
            './vendor/bower_components/pickadate/lib/themes/classic.date.css',
            './vendor/bower_components/font-awesome/css/font-awesome.min.css',
            './vendor/bower_components/ionicons/css/ionicons.min.css',
            './vendor/bower_components/simple-line-icons/css/simple-line-icons.css',
            ], './public/css/vendor_public.css', './public/css')

        .scripts([
            './vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            './vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
            './vendor/bower_components/jquery-validation/dist/jquery.validate.js',
            './vendor/bower_components/moment/min/moment.min.js',
            './vendor/bower_components/toastr/toastr.js',
            './vendor/bower_components/dropzone/dist/dropzone.js',
            './vendor/bower_components/waves/dist/waves.js',
            './vendor/bower_components/pickadate/lib/picker.js',
            './vendor/bower_components/pickadate/lib/picker.time.js',
            './vendor/bower_components/pickadate/lib/picker.date.js',
            './vendor/bower_components/summernote/dist/summernote.js',
            './vendor/bower_components/jquery-timeago/jquery.timeago.js',
            './vendor/bower_components/Sortable/Sortable.min.js',
        ], './public/js/vendor_public.js', './public/js')

        //.version(["public/css/vendor_admin.css", "public/js/vendor_admin.js", "public/css/vendor_public.css", "public/js/vendor_public.js"])

        //.copy('./vendor/bower_components/font-awesome/fonts', './public/build/fonts')
        .copy('./vendor/bower_components/ionicons/fonts', './public/fonts')
        .copy('./vendor/bower_components/font-awesome/fonts', './public/fonts')
        .copy('./vendor/bower_components/simple-line-icons/fonts', './public/fonts')

        .copy('./vendor/bower_components/DataTables/media/images', './public/packages/data-tables/images')

        .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.css', './public/packages/fullcalendar/fullcalendar.min.css')
        .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.js', './public/packages/fullcalendar/fullcalendar.min.js')
        .copy('./vendor/bower_components/fullcalendar/lang', './public/packages/fullcalendar/lang')

        .copy('./vendor/bower_components/nestable-2/jquery.nestable.css', './public/packages/nestable/jquery.nestable.css')
        .copy('./vendor/bower_components/nestable-2/jquery.nestable.js', './public/packages/nestable/jquery.nestable.js')

        .copy('vendor/bower_components/jquery/dist/jquery.min.js', 'public/packages/jquery/js/jquery.min.js')
        .copy('vendor/bower_components/jquery/dist/jquery.min.map', 'public/packages/jquery/js/jquery.min.map')

    	;
});