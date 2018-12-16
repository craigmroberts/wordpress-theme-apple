var gulp = require('gulp'),
    cons = require('../constants.js');

// svg settings
var svg = {
  src : ['./src/svg/**/*'],
  build : cons.dist + cons.assets + 'svg/'
};

// Copy svg folder to destination
gulp.task('svg', function() {
  return gulp.src(svg.src)
    .pipe(gulp.dest(svg.build));
});
