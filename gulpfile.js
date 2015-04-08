var elixir = require('laravel-elixir');
var gulp = require('gulp');
var shell = require('gulp-shell');
var sass = require('gulp-ruby-sass');
var foreach = require('gulp-foreach');
var sourcemaps = require('gulp-sourcemaps');
var chalk = require('chalk');

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
var config = {
    'sass': {
        'sourcemap'     : true,
        'lineNumbers'   : true
    }
}
var paths = {
    'jquery'            : bowerDir + 'jquery/',
    'jqueryui'          : bowerDir + 'jquery-ui/',
    'bootstrap'         : bowerDir + 'bootstrap-sass-official/assets/',
    // Bootstrap addons
    'xeditable'         : bowerDir + 'x-editable/dist/bootstrap3-editable/',    // Inline editing of elements
    'typeahead'         : bowerDir + 'typeahead.js/',                           // Autosuggest with look ahead
    'tokenfield'        : bowerDir + 'bootstrap-tokenfield/',                   // Tagging/Tokenizing
    'notify'            : bowerDir + 'remarkable-bootstrap-notify/',            // Notifications
    'animate'           : bowerDir + 'animate.css/',                            // CSS Animations
    'owlcarousel'       : bowerDir + 'owl.carousel/',                           // CSS Animations
    'bootstraptable'    : bowerDir + 'bootstrap-table/',                        // Bootstrap Datatable
    'modernizr'         : bowerDir + 'modernizr/',                              // Bootstrap Datatable
    'fontawesome'       : bowerDir + 'fontawesome/',                            // Fontawesome
    'assets': {
        'js'            : assetsDir + 'javascripts/',
        'adminjs'       : assetsDir + 'javascripts/admin/'
    },
    'fonts'             : './public/fonts/',
    'css'               : './public/css/',
    'javascripts'       : './public/js/'
};

elixir.extend('printer', function(message) {
    gulp.task('printer', function() {
        console.error(chalk.white('[') + chalk.bold.cyan('PRNTR') + chalk.white('] ') + chalk.green(message));
    });
    return this.queueTask('printer');
});

elixir.extend('l5sass', function() {
    gulp.task('style', function() {
        return sass(assetsDir + '/sass/style.scss', {
            sourcemap: config.sass.sourcemap,
            lineNumbers: config.sass.lineNumbers,
            container: 'gulp-ruby-sass-style' })
            .on('error', function(err) { console.error('Error', err.message); })
            .pipe(sourcemaps.write('./', {
                includeContent: true,
                sourceRoot: paths.css
            }))
            .pipe(gulp.dest(paths.css));
    });
    gulp.task('admin', function() {
        return sass(assetsDir + '/sass/admin.scss', {
            sourcemap: config.sass.sourcemap,
            lineNumbers: config.sass.lineNumbers,
            container: 'gulp-ruby-sass-admin' })
            .on('error', function(err) { console.error('Error', err.message); })
            .pipe(sourcemaps.write('./', {
                includeContent: true,
                sourceRoot: paths.css
            }))
            .pipe(gulp.dest(paths.css));
    });
    gulp.task('l5sass', ['admin', 'style']);
    return this.queueTask('l5sass');
});

elixir(function(mix) {
    mix.l5sass()
        .coffee()                                                               // Compile the CoffeeScript
        .scripts([                                                              // Concatenate the vendor javascripts
            paths.jquery            + 'dist/jquery.min.js',                     // - jquery
            paths.jqueryui          + 'jquery-ui.min.js',                       // - jqueryui
            paths.bootstrap         + 'javascripts/bootstrap.min.js',           // - bootstrap
            paths.xeditable         + 'js/bootstrap-editable.min.js',           // - bootstrap x-editable
            paths.typeahead         + 'dist/typeahead.bundle.min.js',           // - bootstrap typeahead/bloodhound bundle
            paths.tokenfield        + 'dist/bootstrap-tokenfield.min.js',       // - bootstrap tokenfield
            paths.notify            + 'dist/bootstrap-notify.min.js',           // - bootstrap notify
            paths.bootstraptable    + 'dist/bootstrap-table.min.js',            // - bootstrap datatables
            paths.owlcarousel       + 'dist/owl.carousel.min.js',               // - owl carousel
            paths.modernizr         + 'modernizr.js'                            // - modernizr
        ], 'public/js/vendor.js', bowerDir)
        .scripts([                                                              // Concatenate the admin javascripts
            paths.assets.adminjs + '*.js'
        ], 'public/js/admin.js', assetsDir)
        .scripts([                                                              // Concatenate the custom javascripts
            paths.assets.js + '*.js'
        ], 'public/js/custom.js', assetsDir)
        .version([
            'public/css/style.css',                                             // CSS Version Control
            'public/js/custom.js',                                              // JS Version Control
            'public/css/admin.css',                                             // Admin CSS Version Control
            'public/js/admin.js',                                               // Admin JS Version Control
            'public/js/vendor.js'                                               // Vendor JS Version Control
        ])
        .copy(paths.bootstrap + 'fonts/*', paths.fonts)                         // Copy bootstrap fonts from resources to public
        .copy(paths.fontawesome + 'fonts/*', paths.fonts + 'fontawesome/')      // Copy fontawesome fonts from resources to public
        .phpUnit()                                                              // Complete phpUnit testing
        .phpSpec();                                                             // Run phpSpec
});