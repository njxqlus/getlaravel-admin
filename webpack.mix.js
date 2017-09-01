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

mix.js('resources/assets/js/app.js', 'public/js')
    // .sass('resources/assets/sass/app.scss', 'public/css')
    .less('resources/assets/sass/app.less', 'public/css')

    //Bootstrap
    .copyDirectory('node_modules/bootstrap/dist', 'public/vendor/bootstrap')

    //jQuery
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/vendor/jquery/jquery.min.js')

    //Admin-LTE
    .copyDirectory('node_modules/admin-lte/dist', 'public/vendor/admin-lte')

    //iCheck
    .copy('node_modules/icheck/icheck.min.js', 'public/vendor/icheck/icheck.min.js')
    .copyDirectory('node_modules/icheck/skins', 'public/vendor/icheck/skins')
;
