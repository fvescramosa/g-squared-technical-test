// GULP PACKAGES
// Most packages are lazy loaded
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    browserSync = require('browser-sync').create(),
    filter = require('gulp-filter'),
    touch = require('gulp-touch-cmd'),
    plugin = require('gulp-load-plugins')();


// GULP VARIABLES
// Modify these variables to match your project needs

// Set local URL if using Browser-Sync
const LOCAL_URL = 'http://g-squared-technical.test/';

// Set path to Foundation files
const FOUNDATION = 'node_modules/foundation-sites';

// Select Foundation components, remove components project will not use
const SOURCE = {
	scripts: [
		// Lets grab what-input first
	    'node_modules/what-input/dist/what-input.js',
        'node_modules/slick-carousel/slick/slick.js',

		// Place custom JS here, files will be concantonated, minified if ran with --production
		'assets/scripts/js/**/*.js',
    ],
    headerScripts: [
      //'node_modules/vue/dist/vue.js', // development build
      //'node_modules/vue/dist/vue.min.js', //production build

      // Place custom JS here, files will be concantonated, minified if ran with --production
      'assets/scripts/header-js/**/*.js',
    ],

	// Scss files will be concantonated, minified if ran with --production
	styles: 'assets/styles/scss/**/*.scss',

	// Images placed here will be optimized
	images: 'assets/images/src/**/*',

	php: '**/*.php'
};

const ASSETS = {
	styles: 'assets/styles/',
	scripts: 'assets/scripts/',
	images: 'assets/images/',
	all: 'assets/'
};

const JSHINT_CONFIG = {
	"node": true,
	"globals": {
		"document": true,
		"window": true,
		"jQuery": true,
		"$": true,
		"Foundation": true
	}
};

// GULP FUNCTIONS
// JSHint, concat, and minify JavaScript
gulp.task('scripts', function() {

    // Use a custom filter so we only lint custom JS
    const CUSTOMFILTER = filter(ASSETS.scripts + 'js/**/*.js', {restore: true});

    return gulp.src(SOURCE.scripts)
        .pipe(plugin.plumber(function(error) {
            gutil.log(gutil.colors.red(error.message));
            this.emit('end');
        }))
        .pipe(plugin.sourcemaps.init())
        .pipe(plugin.babel({
            presets: ['es2015'],
            compact: true,
            ignore: ['what-input.js']
        }))
        .pipe(CUSTOMFILTER)
        .pipe(plugin.jshint(JSHINT_CONFIG))
        .pipe(plugin.jshint.reporter('jshint-stylish'))
        .pipe(CUSTOMFILTER.restore)
        .pipe(plugin.concat('scripts.js'))
        .pipe(plugin.uglify())
        .pipe(plugin.sourcemaps.write('.')) // Creates sourcemap for minified JS
        .pipe(gulp.dest(ASSETS.scripts))
});

gulp.task('header-scripts', function() {
  // Use a custom filter so we only lint custom JS
  const CUSTOMFILTER = filter(ASSETS.scripts + 'header-js/**/*.js', {restore: true});

  return gulp.src(SOURCE.headerScripts)
    .pipe(plugin.plumber(function(error) {
      gutil.log(gutil.colors.red(error.message));
      this.emit('end');
    }))
    .pipe(plugin.sourcemaps.init())
    .pipe(plugin.babel({
      presets: ['es2015'],
      compact: true,
      ignore: ['vue.js', 'vue.min.js']
     }))
     .pipe(plugin.concat('header-scripts.js'))
     .pipe(plugin.sourcemaps.write('.')) // Creates sourcemap for minified JS
     .pipe(gulp.dest(ASSETS.scripts))
});

// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
    return gulp.src(SOURCE.styles)
        .pipe(plugin.plumber(function(error) {
          gutil.log(gutil.colors.red(error.message));
          this.emit('end');
        }))
        .pipe(plugin.sourcemaps.init())
        .pipe(plugin.sass())
        .pipe(plugin.sourcemaps.write('.'))
        .pipe(gulp.dest(ASSETS.styles))
        .pipe(browserSync.reload({
            stream: true
        }));
});

// Optimize images, move into assets directory
gulp.task('images', function() {
	return gulp.src(SOURCE.images)
		.pipe(plugin.imagemin())
		.pipe(gulp.dest(ASSETS.images))
});

 gulp.task( 'translate', function () {
     return gulp.src( SOURCE.php )
         .pipe(plugin.wpPot( {
             domain: 'jointswp',
             package: 'Example project'
         } ))
        .pipe(gulp.dest('file.pot'));
 });

// Browser-Sync watch files and inject changes
gulp.task('browsersync', function() {

    // Watch these files
    var files = [
    	SOURCE.php,
    ];

    browserSync.init(files, {
	    proxy: LOCAL_URL,
    });

    gulp.watch(SOURCE.styles, gulp.parallel('styles'));
    gulp.watch(SOURCE.scripts, gulp.parallel('scripts')).on('change', browserSync.reload);
    gulp.watch(SOURCE.scripts, gulp.parallel('header-scripts')).on('change', browserSync.reload);
    gulp.watch(SOURCE.images, gulp.parallel('images'));

});

// Watch files for changes (without Browser-Sync)
gulp.task('watch', function() {

	// Watch .scss files
	gulp.watch(SOURCE.styles, gulp.parallel('styles'));

	// Watch scripts files
	gulp.watch(SOURCE.scripts, gulp.parallel('scripts'));

	// Watch images files
	gulp.watch(SOURCE.images, gulp.parallel('images'));

});

// Run styles, scripts and foundation-js
gulp.task('default', gulp.parallel('styles', 'scripts', 'images'));
