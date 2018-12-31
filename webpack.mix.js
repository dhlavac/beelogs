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

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/frontend/fe-styles.scss', 'public/css');

mix.sass('resources/sass/dashboard/app.scss', 'public/css');
mix.sass('resources/sass/dashboard/be-styles.scss', 'public/css');
