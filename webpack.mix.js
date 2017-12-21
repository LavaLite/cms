let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('./node_modules/jquery/dist/jquery.min.js', './public/assets/vendor/jquery/jquery.min.js');

// compile admin assets
// mix.setPublicPath('./public/themes/admin/assets/dist');
// mix.js('./public/themes/admin/assets/js/app.js', 'js')
//    .sass('./public/themes/admin/assets/sass/app.scss', 'css/styles.css');

//compile user assets
mix.setPublicPath('./public/themes/user/assets/dist');
mix.js('./public/themes/user/assets/js/app.js', 'js')
   .sass('./public/themes/user/assets/sass/app.scss', 'css/styles.css');

//compile client assets
// mix.setPublicPath('./public/themes/client/assets/dist');
// mix.js('./public/themes/client/assets/js/app.js', 'js')
//    .sass('./public/themes/client/assets/sass/app.scss', 'css/styles.css');

// compile public assets
// mix.setPublicPath('./public/themes/public/assets/dist');
// mix.js('./public/themes/public/assets/js/app.js', 'js')
//    .sass('./public/themes/public/assets/sass/app.scss', 'css/styles.css');

