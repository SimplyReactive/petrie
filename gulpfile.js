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
    'bootstrap'     : bowerDir + 'bootstrap-sass-official/assets/',
    // Bootstrap addons
    'xeditable'     : bowerDir + 'x-editable/dist/bootstrap3-editable',         // Inline editing of elements
    'typeahead'     : bowerDir + 'typeahead.js/',                               // Autosuggest with look ahead
    'tokenfield'    : bowerDir + 'bootstrap-tokenfield/',                       // Tagging/Tokenizing
    'notify'        : bowerDir + 'bootstrap.notify/',                           // Notifications
    'assets': {
        'js'        : assetsDir + 'javascripts/'
    },
    'build': {
        'fonts'     : './public/fonts/'
    }
};

elixir(function(mix) {
    mix.rubySass('style.scss')                                                  // Compile the main SASS
        .coffee()                                                               // Compile the CoffeeScript
        .scripts([                                                              // Concatenate the vendor javascripts
            paths.jquery + 'dist/jquery.min.js',                                // - jquery
            paths.jqueryui + 'jquery-ui.min.js',                                // - jqueryui
            paths.bootstrap + 'javascripts/bootstrap.min.js',                   // - bootstrap
            paths.xeditable + 'js/bootstrap-editable.min.js',                   // - bootstrap x-editable
            paths.typeahead + 'dist/typeahead.bundle.min.js',                   // - bootstrap typeahead/bloodhound bundle
            paths.tokenfield + 'dist/bootstrap-tokenfield.min.js',              // - bootstrap tokenfield
            paths.notify + 'js/bootstrap-notify.js',                            // - bootstrap notify
        ], 'public/js/vendor.js', bowerDir)
        .scripts([                                                              // Concatenate the custom javascripts
            paths.assets.js + '*.js'
        ], 'public/js/custom.js', assetsDir)
        .version([                                                              // CSS Versioning
            'public/css/style.css',
            'public/js/custom.js'
        ])
        .copy(paths.bootstrap + 'fonts/*', paths.build.fonts)                   // Copy fonts from resources to public
        .phpUnit()                                                              // Complete phpUnit testing
        .phpSpec();                                                             // Run phpSpec
});