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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.copy('resources/js/blog', 'public/js');
mix.copy('resources/css', 'public/css');
mix.copy('resources/images', 'public/images');
mix.copy('resources/fonts', 'public/fonts');

if (mix.inProduction()) {
    mix.version();
}
