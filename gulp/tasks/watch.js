var gulp = require('gulp'),
    cons = require('../constants.js'),
    browserSync = require('browser-sync').create();

gulp.task('watch', function() {

  browserSync.init({
      injectChanges: true,
      notify: false,
      port: 8080,
  		proxy: 'http://local.wordpress.com/', // MAMP vhost
  		reloadOnRestart: true,
  });

  // Image changes
  gulp.watch(cons.src + '/images/**/*',  gulp.series('images'), function () {
    browserSync.reload();
  });

  // Sprites file changes
  gulp.watch(cons.src + '/sprites/**/*', gulp.series('sprites','cssInject'), function() {
  });

  // PHP file changes
  gulp.watch(cons.src + '/templates/**/*', gulp.series('php','phpInject'), function() {
  });

  // CSS changes
  gulp.watch(cons.src + '/styles/**/*',  gulp.series('styles','cssInject'), function () {
  });

  // JavaScript main changes
  gulp.watch(cons.src + '/scripts/**/*',  gulp.series('scripts','jsInject'), function () {
  });
});

gulp.task('phpInject', function() {
    return gulp.src(cons.dist + '/**/*')
      .pipe(browserSync.stream());
});

gulp.task('cssInject', function() {
    return gulp.src(cons.dist + '/style.css')
      .pipe(browserSync.stream());
});

gulp.task('jsInject', function() {
    return gulp.src(cons.dist + cons.assets + 'scripts/app.bundle.js')
      .pipe(browserSync.stream());
});
