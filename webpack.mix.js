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

mix.js('resources/js/app.js', 'public/js')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .copy('resources/img', 'public/img')
    .sass('resources/scss/app2.scss', 'public/css')
    .webpackConfig(require('./webpack.config'))
    .browserSync("127.0.0.1:8000")
    .disableNotifications(); //because it is annoying

if (mix.inProduction()) {
    mix.version();
}
