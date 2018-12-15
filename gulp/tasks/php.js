var gulp = require('gulp'),
    cons = require('../constants.js'),
    browserSync = require('browser-sync').create(),
    newer = require('gulp-newer');

// PHP settings
var php = {
  src : cons.src + '/templates/**/*',
  build : cons.dist + '/'
};

// copy PHP files
gulp.task('php', function() {
  return gulp.src(php.src)
    .pipe(newer(php.build))
    .pipe(gulp.dest(php.build));
});
