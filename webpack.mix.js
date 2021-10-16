const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/frontend_assets')
    .js('resources/js/admin/app.js', 'public/js/admin_assets')
    .js('resources/js/admin/jquery.js', 'public/js/admin_assets')
    .js('resources/js/common/icheck.js', 'public/js/common')
    .postCss('resources/css/app.css', 'public/css/frontend_assets')
    .postCss('resources/css/common.css', 'public/css/common')
    .postCss('resources/css/frontend_custom.css', 'public/css/frontend_assets')
    .postCss('resources/css/admin/custom_datatables.css', 'public/css/admin_assets')
    .sass('resources/sass/app.scss', 'public/css/frontend_assets')
    .postCss('resources/css/admin/app.css', 'public/css/admin_assets');

