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

mix.js('resources/assets/js/app.js', 'public/js');
mix.less('resources/assets/less/app.less', 'public/css');

//Bootstrap
mix.copyDirectory('node_modules/bootstrap/dist', 'public/vendor/bootstrap');

//jQuery
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/vendor/jquery/jquery.min.js');

//Admin-LTE
mix.copyDirectory('node_modules/admin-lte/dist', 'public/vendor/admin-lte');

//iCheck
mix.copy('node_modules/icheck/icheck.min.js', 'public/vendor/icheck/icheck.min.js');
mix.copyDirectory('node_modules/icheck/skins', 'public/vendor/icheck/skins');

//Font Awesome
mix.copyDirectory('node_modules/font-awesome/css', 'public/vendor/font-awesome/css');
mix.copyDirectory('node_modules/font-awesome/fonts', 'public/vendor/font-awesome/fonts');

//HTML5 Shiv
mix.copy('node_modules/html5shiv/dist/html5shiv.min.js', 'public/vendor/html5shiv/html5shiv.min.js');

//Respond.js
mix.copy('node_modules/respond.js/dest/respond.min.js', 'public/vendor/respond.js/respond.min.js');