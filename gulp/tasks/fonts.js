var gulp = require('gulp'),
    cons = require('../constants.js');

// image settings
var fonts = {
  src : ['./src/vendors/fontawesome-free/webfonts/**/*',
        './src/vendors/line-awesome/webfonts/**/*'],
  build : cons.dist + cons.assets + 'webfonts/'
};

// Copy fonts folder to destination
gulp.task('fonts', function() {
  return gulp.src(fonts.src)
    .pipe(gulp.dest(fonts.build));
});
