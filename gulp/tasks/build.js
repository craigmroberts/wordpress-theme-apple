var gulp = require('gulp');

// run all tasks
gulp.task('build',gulp.series((['deleteDistFolder','php', 'sprites', 'scripts', 'fonts', 'images'])));
