var gulp = require('gulp')
    webpack = require('webpack'),
    browserSync = require('browser-sync').create(),
    browserSyncConfig = require('../../webpack.config.js');

gulp.task('scripts', function(callback) {
  webpack(browserSyncConfig,function(error, stats) {
    if (error) {
      console.log(error.toString());
    }
    console.log(stats.toString());
    callback();
  });
});
