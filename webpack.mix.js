const mix = require('laravel-mix');
const CleanWebpackPlugin = require('clean-webpack-plugin');

// 每次編譯前先清空目錄
mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin([
            'public/js',
            'public/css',
            'public/fonts',
            'public/images',
        ])
    ]
});

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

mix.js('resources/js/app.js', 'public/js/app.js');
mix.js('resources/js/post.js', 'public/js/post.js');
mix.copy('resources/js/blog', 'public/js');
mix.copy('resources/css', 'public/css');
mix.copy('resources/images', 'public/images');
mix.copy('resources/fonts', 'public/fonts');
mix.copy('node_modules/jquery-easy-loading/dist/jquery.loading.min.js', 'public/js/jquery.loading.min.js');
mix.copy('node_modules/jquery-easy-loading/dist/jquery.loading.min.css', 'public/css/jquery.loading.min.css');

if (mix.inProduction()) {
    mix.version();
}
