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
    	.copy('vendor/bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
    	.copy('vendor/bower_components/jquery/dist/jquery.min.map', 'public/js/jquery.min.map')

    	.copy('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
        .copy('vendor/bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
        .copy('vendor/bower_components/bootstrap/fonts', 'public/fonts')

        .copy('vendor/bower_components/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css')
        .copy('vendor/bower_components/font-awesome/fonts', 'public/fonts')

    	.copy('vendor/bower_components/iCheck/icheck.min.js', 'public/js/icheck.min.js')
        .copy('vendor/bower_components/iCheck/skins', 'public/css/icheck')

        .copy('vendor/bower_components/DataTables/media/js/jquery.dataTables.min.js', 'public/js/jquery.dataTables.min.js')
        .copy('vendor/bower_components/DataTables/media/css/jquery.dataTables.min.css', 'public/css/jquery.dataTables.min.css')
        .copy('vendor/bower_components/DataTables/media/images', 'public/images')

        .copy('vendor/bower_components/summernote/dist/summernote.min.js', 'public/js/summernote.min.js')
        .copy('vendor/bower_components/summernote/dist/summernote.css', 'public/css/summernote.css')
        .copy('vendor/bower_components/summernote/dist/summernote-bs3.css', 'public/css/summernote-bs3.css')

        .copy('vendor/bower_components/jquery-validation/dist/jquery.validate.min.js', 'public/js/jquery.validate.min.js')

        .copy('vendor/bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js', 'public/js/bootstrap-datetimepicker.js')

        .copy('vendor/bower_components/moment/min/moment-with-locales.min.js', 'public/js/moment-with-locales.min.js')

        .copy('vendor/bower_components/toastr/toastr.min.js', 'public/js/toastr.min.js')
        .copy('vendor/bower_components/toastr/toastr.min.css', 'public/css/toastr.min.css')

        .copy('vendor/bower_components/dropzone/dist/min/dropzone.min.js', 'public/js/dropzone.min.js')
        .copy('vendor/bower_components/dropzone/dist/min/dropzone.min.css', 'public/css/dropzone.min.css')

        .copy('vendor/bower_components/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js')
        .copy('vendor/bower_components/sweetalert/dist/sweetalert.css', 'public/css/sweetalert.css')

        .copy('vendor/bower_components/smoke.js/smoke.min.js', 'public/js/smoke.min.js')
        .copy('vendor/bower_components/smoke.js/smoke.css', 'public/css/smoke.css')

    	;
});
