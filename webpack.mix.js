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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/boots.scss', 'public/css');


mix.styles([
   'public/css/responsive.css',
   'public/css/sb-admin.css',
], 'public/css/estilos.css');

mix.babel([
   'public/js/delete.js',
   'public/js/Agregarcolumnas.js',
], 'public/js/funcionalidad.js');