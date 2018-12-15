var gulp = require('gulp'),
    cons = require('../constants.js'),
    imagemin = require('gulp-imagemin'),
    newer = require('gulp-newer');

// image settings
var images = {
  src : cons.src + '/images/**/*',
  build : cons.dist + cons.assets + 'images/'
};

// image processing
gulp.task('images', function() {
  return gulp.src(images.src)
    .pipe(newer(images.build))
    .pipe(imagemin())
    .pipe(gulp.dest(images.build));
});
