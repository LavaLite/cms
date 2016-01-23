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
    mix.sass('app.scss', 'public/dist/css/app.css')

        .scripts([
            'resources/assets/js/app.js',
        ], 'public/dist/js/app.js', './')

        .scripts([
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/jquery-ui/jquery-ui.js',
            'vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            'vendor/bower_components/summernote/dist/summernote.js',
            'vendor/bower_components/DataTables/media/js/jquery.dataTables.js',
            'vendor/bower_components/datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.js',
            'vendor/bower_components/jquery-validation/dist/jquery.validate.js',
            'vendor/bower_components/moment/min/moment-with-locales.min.js',
            'vendor/bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',
            'vendor/bower_components/toastr/toastr.js',
            'vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
            'vendor/bower_components/dropzone/dist/dropzone.js',
        ], 'public/dist/js/vendor.js', './')

        .scripts([
            'vendor/bower_components/dropzone/dist/dropzone.css',
        ],  'public/dist/js/vendor.css', './')

        .version(['public/dist/css/app.css', 'public/dist/js/app.js', 'public/dist/js/vendor.js'])

        .copy('vendor/bower_components/font-awesome/fonts',                                                            'public/fonts')

        .copy('vendor/bower_components/DataTables/media/css/jquery.dataTables.min.css',                                'public/packages/data-tables/css/jquery.dataTables.min.css')
        .copy('vendor/bower_components/DataTables/media/images',                                                       'public/packages/data-tables/images')

    	.copy('vendor/bower_components/iCheck/icheck.min.js',                                                          'public/packages/icheck/js/icheck.min.js')
        .copy('vendor/bower_components/iCheck/skins',                                                                  'public/packages/icheck/css/icheck')

        .copy('vendor/bower_components/fullcalendar/dist/fullcalendar.min.css',                                        'public/packages/fullcalendar/fullcalendar.min.css')
        .copy('vendor/bower_components/fullcalendar/dist/fullcalendar.min.js',                                         'public/packages/fullcalendar/fullcalendar.min.js')
        .copy('vendor/bower_components/fullcalendar/lang',                                                             'public/packages/fullcalendar/lang')

        .copy('vendor/bower_components/nestable2/jquery.nestable.css',                                                 'public/packages/nestable/jquery.nestable.css')
        .copy('vendor/bower_components/nestable2/jquery.nestable.js',                                                  'public/packages/nestable/jquery.nestable.js')

        .copy('vendor/bower_components/Sortable/Sortable.min.js',                                                      'public/packages/sortable/sortable.min.js')
    	;
});
