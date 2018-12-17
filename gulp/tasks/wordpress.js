var gulp = require('gulp'),
    cons = require('../constants.js'),
    del = require('del'),
    zip = require('gulp-zip'),
    decompress = require('gulp-decompress'),
    download = require('gulp-download'),
    mysqldump = require('mysqldump');

// Download Wordpress
gulp.task('wp-build', function () {
    return download('https://wordpress.org/latest.tar.gz')
        .pipe(decompress({strip: 1})) //unzip wordpress
        .pipe(gulp.dest(cons.public + '/'));
});

// MYSQL Dump
gulp.task('wp-mysqldump', function () {
  return mysqldump({
      connection: {
          host: 'localhost',
          user: 'root',
          password: '',
          database: 'cmr_apple',
      },
      dumpToFile: cons.public + '/site.sql',
  });
});

// Pack site files and database
gulp.task('pack', gulp.series(['build','wp-mysqldump'], function() {
  return gulp.src(cons.public + '/**/*')
      .pipe(zip('site.zip'))
      .pipe(gulp.dest('./dist'))
}));
