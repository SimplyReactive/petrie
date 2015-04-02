var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var bowerDir = './resources/vendor/bower_components/';
var assetsDir = './resources/assets/';
var paths = {
    'jquery'        : bowerDir + 'jquery/',
    'jqueryui'      : bowerDir + 'jquery-ui/',
    'bootstrap'     : bowerDir + 'bootstrap-sass-official/',
    'assets': {
        'js'    : assetsDir + 'javascripts/',
        'fonts' : assetsDir + 'font/'
    },
    'build': {
        'css'   : './public/build/css/',
        'fonts' : './public/build/font/'
    }
};

elixir(function(mix) {
    mix.rubySass('style.scss')                                  // Compile the main SASS
        .coffee()                                               // Compile the CoffeeScript
        .scripts([                                              // Concatenate the vendor javascripts
            paths.jquery + 'dist/jquery.min.js',                // - jquery
            paths.jqueryui + 'jquery-ui.min.js',                // - jqueryui
            paths.bootstrap + 'assets/javascripts/bootstrap.min.js'    // - bootstrap
        ], 'public/js/vendor.js', bowerDir)
        .scripts([                                              // Concatenate the custom javascripts
            paths.assets.js + 'global.js'                       // - code that is used globally
        ], 'public/js/custom.js', assetsDir)
        .version([                                              // CSS Versioning
            'public/css/style.css',
            'public/js/custom.js'
        ])
        .copy(paths.bootstrap + 'fonts/*', paths.build.fonts)    // Copy fonts from resources to public
        .phpUnit()                                              // Complete phpUnit testing
        .phpSpec();                                             // Run phpSpec
});