const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/adminApp.js', 'public/js')
    .vue()
    .sass('resources/sass/bootstrap.scss', 'public/css')
    .styles('resources/assets/front/css/vars.css', 'public/css/vars.css')
    .styles('resources/assets/front/css/base.css', 'public/css/base.css')
    .styles('resources/assets/front/css/button.css', 'public/css/button.css')
    .styles('resources/assets/front/css/header/header.css', 'public/css/header/header.css')
    .styles('resources/assets/front/css/main/main.css', 'public/css/main/main.css')
    .styles('resources/assets/front/css/footer/footer.css', 'public/css/footer/footer.css')
    .styles('resources/assets/front/css/breakpoints.css', 'public/css/breakpoints.css')
    .styles('resources/assets/front/css/breakpoints-desktop.css', 'public/css/breakpoints-desktop.css')
    .styles('resources/assets/front/css/breakpoints-full.css', 'public/css/breakpoints-full.css')
    .styles('resources/assets/front/css/style.css', 'public/css/style.css')
    .copyDirectory('resources/assets/front/img', 'public/img')
    .copyDirectory('resources/assets/front/fonts', 'public/fonts')
    .copyDirectory('resources/assets/front/slider', 'public/slider')
    .copy('resources/assets/admin/css/adminlte.css.map', 'public/assets/admin/css/adminlte.css.map')
    .copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map')
    .styles([
        'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
        'resources/assets/admin/css/adminlte.min.css',
    ], 'public/assets/admin/css/admin.css')
    .scripts([
        'resources/assets/admin/plugins/jquery/jquery.js',
        'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/admin/js/adminlte.min.js',
        'resources/assets/admin/js/demo.js',
    ], 'public/assets/admin/js/admin.js')
    .copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts')
    .copyDirectory('resources/assets/admin/img', 'public/assets/admin/img')
    .copy('resources/assets/admin/js/adminlte.min.js.map', 'public/assets/admin/js/adminlte.min.js.map');
