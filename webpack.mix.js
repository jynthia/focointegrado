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

    'public/css/programs/css/animate.css',
    'public/css/programs/css/icomoon.css',
    'public/css/programs/css/bootstrap.css',
    'public/css/programs/css/magnific-popup.css',
    'public/css/programs/css/flexslider.css',
    'public/css/programs/css/owl.carousel.min.css',
    'public/css/programs/css/owl.theme.default.min.css',
    'public/css/programs/fonts/flaticon/font/flaticon.css',
    'public/css/programs/css/style.css',
    'public/css/login/styles.css'

], 'public/css/programs.css');

mix.styles([

    'public/css/contact.css',
    'public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
    'public/css/prof/animate/css',
    'public/css/css-hamburgers/hamburgers.min.css',
    'public/css/animsition/css/animsition.min.css',
    'public/css/select2/select2.min.css'


], 'public/css/contacts.css');
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
], 'public/js/prof/prof-custom.js');

mix.scripts([
    'public/css/programs/js/modernizr-2.6.2.min.js',
    'public/css/programs/js/respond.min.js'
], 'public/css/programs/js/start.js');

mix.scripts([
    'public/css/programs/js/jquery.min.js',
    'public/css/programs/js/jquery.easing.1.3.js',
    'public/css/programs/js/bootstrap.min.js',
    'public/css/programs/js/jquery.waypoints.min.js',
    'public/css/programs/js/jquery.stellar.min.js',
    'public/css/programs/js/jquery.flexslider-min.js',
    'public/css/programs/js/owl.carousel.min.js',
    'public/css/programs/js/jquery.magnific-popup.min.js',
    'public/css/programs/js/magnific-popup-options.js',
    'public/css/programs/js/jquery.countTo.js',
    'public/css/programs/js/main.js'
], 'public/css/programs/js/programs.js');
