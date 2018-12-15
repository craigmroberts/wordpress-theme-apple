var gulp = require('gulp');

// default task
gulp.task('default',
  gulp.series(
    (
      'build',
      'watch'
    )
  )
);
