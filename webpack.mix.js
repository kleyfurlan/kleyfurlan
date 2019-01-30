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
//    .sass('resources/sass/app.scss', 'public/css');

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
// .copy('node_modules/font-awesome/fonts', 'public/site/fonts')
mix.js('resources/js/bootstrap.js', 'public/site/js/app.js')
   .js('resources/js/front.js', 'public/site/js/front.js')
      .extract(['jquery', 'jquery-validation', 'bootstrap', 'popper.js', 'axios', 'sweetalert2'])
   .sass('resources/sass/front.scss', 'public/site/css/style.css')
   .sass('resources/sass/app.scss', 'public/site/css')
   // .copy('node_modules/font-awesome/fonts', 'public/fonts')
   .version()
   .options({
         processCssUrls: false
   });

//    .copy('node_modules/font-awesome/fonts', 'public/site/css/fonts/vendor/font-awesome');

   
