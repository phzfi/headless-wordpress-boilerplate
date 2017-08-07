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

// Default theme
mix.js('web/app/themes/default/js/app.js', 'web/app/themes/default/app.js')
  .sass('web/app/themes/default/scss/style.scss', 'web/app/themes/default/style.css');
