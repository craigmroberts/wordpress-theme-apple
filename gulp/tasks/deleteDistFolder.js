var gulp = require('gulp'),
    cons = require('../constants.js'),
    del = require('del');

gulp.task('deleteDistFolder', function () {

  return del([cons.dist], {force: true});
});
