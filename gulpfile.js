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
    //mix.less('app.less');
    mix
    	.copy('vendor/bower_components/jquery/dist/jquery.min.js',                                                     'public/packages/jquery/js/jquery.min.js')
    	.copy('vendor/bower_components/jquery/dist/jquery.min.map',                                                    'public/packages/jquery/js/jquery.min.map')

    	.copy('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js',                                            'public/packages/bootstrap/js/bootstrap.min.js')
        .copy('vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',                                          'public/packages/bootstrap/css/bootstrap.min.css')
        .copy('vendor/bower_components/bootstrap/fonts',                                                               'public/packages/bootstrap/fonts')

        .copy('vendor/bower_components/font-awesome/css/font-awesome.min.css',                                         'public/packages/font-awesome/css/font-awesome.min.css')
        .copy('vendor/bower_components/font-awesome/fonts',                                                            'public/packages/font-awesome/fonts')

    	.copy('vendor/bower_components/iCheck/icheck.min.js',                                                          'public/packages/icheck/js/icheck.min.js')
        .copy('vendor/bower_components/iCheck/skins',                                                                  'public/packages/icheck/css/icheck')

        .copy('vendor/bower_components/DataTables/media/js/jquery.dataTables.min.js',                                  'public/packages/data-tables/js/jquery.dataTables.min.js')
        .copy('vendor/bower_components/DataTables/media/css/jquery.dataTables.min.css',                                'public/packages/data-tables/css/jquery.dataTables.min.css')
        .copy('vendor/bower_components/DataTables/media/images',                                                       'public/packages/data-tables/images')

        .copy('vendor/bower_components/datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.min.js',            'public/packages/datatables-bootstrap3/js/datatables-bootstrap3.min.js')
        .copy('vendor/bower_components/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.min.css',          'public/packages/datatables-bootstrap3/css/datatables-bootstrap3.min.css')

        .copy('vendor/bower_components/fullcalendar/dist/fullcalendar.min.css',                                        'public/packages/fullcalendar/fullcalendar.min.css')
        .copy('vendor/bower_components/fullcalendar/dist/fullcalendar.min.js',                                         'public/packages/fullcalendar/fullcalendar.min.js')
        .copy('vendor/bower_components/fullcalendar/lang',                                                             'public/packages/fullcalendar/lang')

        .copy('vendor/bower_components/summernote/dist/summernote.min.js',                                             'public/packages/summernote/js/summernote.min.js')
        .copy('vendor/bower_components/summernote/dist/summernote.css',                                                'public/packages/summernote/css/summernote.css')
        .copy('vendor/bower_components/summernote/dist/summernote-bs3.css',                                            'public/packages/summernote/css/summernote-bs3.css')

        .copy('vendor/bower_components/jquery-validation/dist/jquery.validate.min.js',                                 'public/packages/jquery-validation/js/jquery.validate.min.js')

        .copy('vendor/bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',          'public/packages/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')

        .copy('vendor/bower_components/moment/min/moment-with-locales.min.js',                                         'public/packages/moment/js/moment-with-locales.min.js')

        .copy('vendor/bower_components/toastr/toastr.min.js',                                                          'public/packages/toastr/js/toastr.min.js')
        .copy('vendor/bower_components/toastr/toastr.min.css',                                                         'public/packages/toastr/css/toastr.min.css')

        .copy('vendor/bower_components/dropzone/dist/min/dropzone.min.js',                                             'public/packages/dropzone/js/dropzone.min.js')
        .copy('vendor/bower_components/dropzone/dist/min/dropzone.min.css',                                            'public/packages/dropzone/css/dropzone.min.css')

        .copy('vendor/bower_components/sweetalert/dist/sweetalert.min.js',                                             'public/packages/sweetalert/js/sweetalert.min.js')
        .copy('vendor/bower_components/sweetalert/dist/sweetalert.css',                                                'public/packages/sweetalert/css/sweetalert.css')

        .copy('vendor/bower_components/smoke.js/smoke.min.js',                                                         'public/packages/smoke-js/js/smoke.min.js')
        .copy('vendor/bower_components/smoke.js/smoke.css',                                                            'public/packages/smoke-js/css/smoke.css')

        .copy('vendor/bower_components/nestable2/jquery.nestable.css',                                                 'public/packages/nestable/jquery.nestable.css')
        .copy('vendor/bower_components/nestable2/jquery.nestable.js',                                                  'public/packages/nestable/jquery.nestable.js')

        .copy('vendor/bower_components/Sortable/Sortable.min.js',                                                      'public/packages/sortable/sortable.min.js')

        .copy('vendor/bower_components/Sortable/Sortable.min.js',                                                      'public/packages/sortable/sortable.min.js')

        .copy('vendor/bower_components/jquery-ui/jquery-ui.min.js',                                                    'public/packages/jquery-ui/jquery-ui.min.js')

    	;
});
