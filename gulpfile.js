var elixir = require('laravel-elixir');
var elixirconfig = require('laravel-elixir').config;
var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var shell = require('gulp-shell');
var foreach = require('gulp-foreach');
var sourcemaps = require('gulp-sourcemaps');
var chalk = require('chalk');
var util = require('gulp-util');
var sassyPetrie = require('sassy-petrie');
var dateformat = require('dateformat');

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

var appRoot = './';
var bowerDir = './bower_components/';
var nodeDir = './node_modules/';
var assetsDir = './resources/assets/';
var config = {
	'sass': {
		'sourcemap': true,
		'lineNumbers': true
	},
	'debug': true // Enabling this will expose the SASS in the browser development tools
};

elixirconfig.production = !! util.env.production;
elixirconfig.srcDir = 'app';
elixirconfig.publicDir = 'public';
elixirconfig.assetsDir = 'resources/assets/';
elixirconfig.bowerDir = 'bower_components';
elixirconfig.cssOutput = 'public/css';
elixirconfig.jsOutput = 'public/js';
elixirconfig.sourcemaps = ! util.env.production;
elixirconfig.autoprefix = true;
elixirconfig.tasks = [];
elixirconfig.watchers = { default: {} };
elixirconfig.duplicat = [];
elixirconfig.concatenate = { css: [], js: [] };
elixirconfig.compile = {};
elixirconfig.babel.enabled = false ;

var paths = {
	'jquery'        : bowerDir + 'jquery/',									// jQuery
	'jqueryui'      : bowerDir + 'jquery-ui/',								// jQuery UI
	'bootstrap'     : bowerDir + 'bootstrap-sass-official/assets/',			// Bootstrap SASS
	'raphael'       : bowerDir + 'raphael/',								// Raphael JS Vector Graphics

	'xeditable'     : bowerDir + 'x-editable/dist/bootstrap3-editable/',    // Inline editing of elements
	'typeahead'     : bowerDir + 'typeahead.js/',                           // Auto-suggest with look ahead
	'tokenfield'    : bowerDir + 'bootstrap-tokenfield/',                   // Tagging/Tokenizing
	'notify'        : bowerDir + 'remarkable-bootstrap-notify/',            // Notifications
	'animate'       : bowerDir + 'animate.css/',                            // CSS Animations
	'owlcarousel'   : bowerDir + 'owl.carousel/',                           // Responsive Carousel
	'bootstraptable': bowerDir + 'bootstrap-table/',                        // Bootstrap Data-table
	'modernizr'     : bowerDir + 'modernizr/',                              // Modernizr
	'underscore'    : bowerDir + 'underscore/',                             // Underscore.js
	'easypiechart'  : bowerDir + 'jquery.easy-pie-chart/',                  // Easy Pie Charts
	'morrisjs'      : bowerDir + 'morris.js/',                 				// Morris.js Charts
	'chartjs'       : bowerDir + 'Chart.js/',                 				// Chart.js Charts
	'animatenumber' : bowerDir + 'jquery-animatenumber/',                   // Number Animation
	'assets'        : {
		'sass'      : assetsDir + 'sass/',                                  // SASS directory
		'js'        : assetsDir + 'javascripts/',                           // JS source directory
		'adminjs'   : assetsDir + 'javascripts/admin/',                     // Administration JS source directory
		'svg'       : assetsDir + 'svg/'                                    // SVG definitions file
	},
	'fonts'         : './public/fonts/',                                    // Public fonts directory
	'css'           : './public/css/',                                      // Public CSS directory
	'javascripts'   : './public/js/',                                       // Public JS directory
	'svg'           : './public/svg/'                                       // Public SVG directory
};



elixir.extend('say', function (message) {
	gulp.task('say', function (e) {
		var time = '[' + chalk.grey(dateformat(new Date(), 'HH:MM:ss')) + ']';
		console.error(time +
		chalk.dim.bold.blue(' [' + chalk.cyan.underline('Petrie') + '] ') +
		chalk.green(message) + chalk.white(''));
	});
	return this.queueTask('say');
});

elixir.extend('petrieSass', function (mix) {
	var Notification = require(nodeDir + 'laravel-elixir/ingredients/commands/Notification.js');
	var notify = new Notification();
	notify.title = 'petrieSass';
	notify.icon = nodeDir + '/../../icons/fail.png';

	gulp.task('style', function () {
		return sass(assetsDir + '/sass/style.scss', {
			sourcemap  : config.sass.sourcemap,
			lineNumbers: config.sass.lineNumbers,
			container  : 'gulp-ruby-sass-style'
		})
			.on('error', function (err) {
				console.error('Error', err.message);
				notify.forFailedTests(err, 'petrieSass');
				this.emit('end');
			})
			.pipe(sourcemaps.write('./', {
				includeContent: true,
				sourceRoot    : elixirconfig.production ? paths.sass : paths.css
			}))
			.pipe(gulp.dest(paths.css))
			.pipe(notify.message('Stylesheet \'style.scss\' has been compiled.'));
	});
	gulp.task('admin', function () {
		return sass(assetsDir + '/sass/admin.scss', {
			sourcemap  : config.sass.sourcemap,
			lineNumbers: config.sass.lineNumbers,
			container  : 'gulp-ruby-sass-admin'
		})
			.on('error', function (err) {
				console.error('Error', err.message);
				notify.forFailedTests(err, 'petrieSass');
			})
			.pipe(sourcemaps.write('./', {
				includeContent: true,
				sourceRoot    : elixirconfig.production ? paths.sass : paths.css
			}))
			.pipe(gulp.dest(paths.css))
			.pipe(notify.message('Stylesheet \'admin.scss\' has been compiled.'));
	});
	gulp.task('petrieSass', ['style', 'admin']);
	return this.queueTask('petrieSass');
});

elixir(function (mix) {
	mix.sassyPetrie(['style.scss', 'admin.scss'])
		.coffee()                                                       // Compile the Coffeescript
		.scripts([                                                      // Concatenate the admin Javascript
			paths.assets.adminjs + '*.js'
		], 'public/js/admin.js', appRoot)
		.scripts([                                                      // Concatenate the custom Javascript
			paths.assets.js + '*.js'
		], 'public/js/custom.js', appRoot)
		.scripts([                                                      // Concatenate the vendor Javascript
			paths.jquery + 'dist/jquery.min.js',                        // - jquery
			paths.jqueryui + 'jquery-ui.min.js',                        // - jqueryui
			paths.bootstrap + 'javascripts/bootstrap.min.js',           // - bootstrap

			paths.xeditable + 'js/bootstrap-editable.min.js',           // - bootstrap x-editable
			paths.typeahead + 'dist/typeahead.bundle.min.js',           // - bootstrap typeahead/bloodhound bundle
			paths.tokenfield + 'dist/bootstrap-tokenfield.min.js',      // - bootstrap tokenfield
			paths.notify + 'dist/bootstrap-notify.min.js',              // - bootstrap notify
			paths.bootstraptable + 'dist/bootstrap-table.min.js',       // - bootstrap datatables
			paths.owlcarousel + 'dist/owl.carousel.min.js',             // - owl carousel
			paths.modernizr + 'modernizr.js',                           // - modernizr
			paths.underscore + 'underscore.js',                         // - underscore
			paths.easypiechart + 'dist/jquery.easypiechart.min.js',     // - jquery.easy-pie-chart
			paths.animatenumber + 'jquery.animateNumber.min.js'         // - jquery.animatenumber
		], 'public/js/vendor.js', appRoot)
		.copy(paths.bootstrap + 'fonts/*', paths.fonts)                 // Copy bootstrap fonts from resources to public
		.copy(paths.assets.svg + 'svgdefs.svg', paths.svg)              // Copy the SVG assets to public
		.version([
			'public/css/style.css',                                     // CSS Version Control
			'public/js/custom.js',                                      // JS Version Control
			'public/css/admin.css',                                     // Admin CSS Version Control
			'public/js/admin.js',                                       // Admin JS Version Control
			'public/js/vendor.js',                                      // Vendor JS Version Control
			'public/svg/svgdefs.svg'                                    // SVG Definitions Version Control
		])
		.phpUnit()                                                      // Complete phpUnit testing
		.phpSpec()                                                      // Run phpSpec
		.say('All tasks complete, cleaning up...');
});


