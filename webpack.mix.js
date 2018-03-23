let mix = require('laravel-mix');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery"
    }
}).options({ processCssUrls: false });
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | If you want to compile assets for a particulat theme
 | uncomment the section and run the required command.
 */

// mix.copy('./node_modules/jquery/dist/jquery.min.js', './public/assets/vendor/jquery/jquery.min.js');

// Admin theme  assets
// mix.setPublicPath('./public/themes/admin/assets/dist');
// mix.js('./public/themes/admin/assets/js/app.js', 'js')
//    .copyDirectory('./node_modules/font-awesome/fonts', './public/themes/admin/assets/dist/fonts')
//    .copyDirectory('./node_modules/ionicons/dist/fonts', './public/themes/admin/assets/dist/fonts')
//    .copyDirectory('./node_modules/bootstrap/dist/fonts', './public/themes/admin/assets/dist/fonts')
//    .copyDirectory('./node_modules/summernote/dist/font', './public/themes/admin/assets/dist/css/font')
//    .sass('./public/themes/admin/assets/sass/app.scss', 'css/styles.css');

// User theme assets
// mix.setPublicPath('./public/themes/user/assets/dist');
// mix.js('./public/themes/user/assets/js/app.js', 'js')
// 	.copyDirectory('./node_modules/font-awesome/fonts', './public/themes/user/assets/dist/fonts')
// 	.copyDirectory('./node_modules/ionicons/dist/fonts', './public/themes/user/assets/dist/fonts')
//     .copyDirectory('./node_modules/bootstrap/dist/fonts', './public/themes/user/assets/dist/fonts')
//     .copyDirectory('./node_modules/pixeden-stroke-7-icon/pe-icon-7-stroke/fonts', './public/themes/user/assets/dist/fonts')
//     .copyDirectory('./node_modules/summernote/dist/font', './public/themes/user/assets/dist/css/font')
// 	.sass('./public/themes/user/assets/sass/app.scss', 'css/styles.css');

// Client theme assets
// mix.setPublicPath('./public/themes/client/assets/dist');
// mix.js('./public/themes/client/assets/js/app.js', 'js')
// 	.copyDirectory('./node_modules/font-awesome/fonts', './public/themes/client/assets/dist/fonts')
// 	.copyDirectory('./node_modules/ionicons/dist/fonts', './public/themes/client/assets/dist/fonts')
//  .copyDirectory('./node_modules/bootstrap/dist/fonts', './public/themes/client/assets/dist/fonts')
//  .copyDirectory('./node_modules/summernote/dist/font', './public/themes/client/assets/dist/css/font')
// 	.sass('./public/themes/client/assets/sass/app.scss', 'css/styles.css');

// Public theme assets
mix.setPublicPath('./public/themes/public/assets/dist');
mix.js('./public/themes/public/assets/js/app.js', 'js')
	.copyDirectory('./node_modules/font-awesome/fonts', './public/themes/public/assets/dist/fonts')
	.copyDirectory('./node_modules/ti-icons/fonts', './public/themes/public/assets/dist/fonts')
	.sass('./public/themes/public/assets/sass/app.scss', 'css/styles.css');

