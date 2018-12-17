var gulp = require('gulp'),
    cons = require('../constants.js'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    gutil = require('gulp-util'),
    postCss = require('gulp-postcss'),
    postCssImport = require('postcss-import'),
    cssnano = require('cssnano'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create();

// CSS settings
var css = {
  src : cons.src + '/styles/styles.scss',
  watch : cons.src + '/styles/**/*',
  build : cons.dist + '/', //wordpresss needs the css in root of theme
  sassOpts: {
    outputStyle : 'compressed',
    imagePath : cons.dist + cons.assets + 'images/',
    precision : 3,
    errLogToConsole : true
  }
};

// CSS processing
gulp.task('styles', function() {

  return gulp.src(css.src)
    .pipe(sass(css.sassOpts)
      .on('error', function(error) {         // Error reporting that won't stop your watch task
        gutil.log(error.message);
      this.emit('end');
    }))
    .pipe(postCss([postCssImport,cssnano()]))
    .pipe(autoprefixer('last 2 versions'))   // Autoprefix for the latest 2 browsers
    .pipe(rename('style.css'))               // Rename our file
    .pipe(sourcemaps.write(cons.dist + '/')) // Write a sourcemap
    .pipe(gulp.dest(cons.dist + '/'))        // Save to the dist directory
    .pipe(gulp.dest(css.build))
    .pipe(browserSync.stream());
});
