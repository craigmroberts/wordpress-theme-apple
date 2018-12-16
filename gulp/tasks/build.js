var gulp = require('gulp');

// run all tasks
gulp.task('build',
  gulp.series(('deleteDistFolder'),
    gulp.parallel(
      'php',
      'styles',
      'scripts',
      'fonts',
      'images',
      'svg'
    )
  )
);
