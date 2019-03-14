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

mix.styles([

    'public/css/login/bootstrap.css',
    'public/css/login/main.css',
    'public/css/login/styles.css',
    'public/css/login/util.css'

],'public/css/login/login.css');

