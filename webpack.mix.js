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

mix.styles([
    'public/css/prof/bootstrap/dist/css/bootstrap.min.css',
    'public/css/prof/assets/sidebar-nav/dist/sidebar-nav.min.css',
    'public/css/prof/assets/toast-master/css/jquery.toast.css',
    'public/css/prof/assets/morrisjs/morris.css',
    'public/css/prof/assets/chartist-js/dist/chartist.min.css',
    'public/css/prof/assets/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'

], 'public/css/prof/prof-assets.css');

mix.styles([
    'public/css/prof/styles-prof.css',
    'public/css/prof/style.css',
    'public/css/prof/animate/css',
    'public/css/prof/colors/default.css'

], 'public/css/prof/prof-styles.css');



mix.scripts([

    'public/js/prof/assets/jquery/dist/jquery.min.js',
    'public/css/prof/bootstrap/dist/js/bootstrap.min.js',
    'public/js/prof/assets/sidebar-nav/dist/sidebar-nav.min.js',
    'public/js/prof/assets/jquery.slimscroll.js',
    'public/js/prof/assets/waves.js',
    'public/js/prof/assets/waypoints/lib/jquery.waypoints.js',
    'public/js/prof/assets/counterup/jquery.counterup.min.js',
    'public/js/prof/assets/chartist-js/dist/chartist.min.js',
    'public/js/prof/assets/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js',
    'public/js/prof/assets/jquery-sparkline/jquery.sparkline.min.js',
    'public/js/prof/assets/toast-master/js/jquery.toast.js'

], 'public/js/prof/prof-assets.js');

mix.scripts([
    'public/js/prof/custom.min.js',
    'public/js/prof/dashboard1.js'
], 'public/js/prof/prof-custom.js')
