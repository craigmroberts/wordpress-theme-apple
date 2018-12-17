var gulp = require('gulp'),
    cons = require('../constants.js'),
    svgSprites = require('gulp-svg-sprite'),
    rename = require('gulp-rename'),
    del = require('del'),
    svg2png = require('gulp-svg2png');

var config = {
  shape: {
    spacing: {
      padding: 1
    }
  },
  mode: {
    css: {
      variables: {
        replaceSvgWithPng: function() {
          return function(sprite, render) {
            return render(sprite).split('.svg').join('.png');
          }
        }
      },
      sprite: 'sprite.svg',
      render: {
        css: {
          template: './gulp/templates/sprite.css'
        }
      }
    }
  }
}

gulp.task('beginClean', function() {
    return del([cons.temp + '/sprite']);
});

gulp.task('createSprite', gulp.series('beginClean', function() {
  return gulp.src(cons.src + '/svg/**/*.svg')
      .pipe(svgSprites(config))
      .pipe(gulp.dest(cons.temp + '/sprite/'));
}));

gulp.task('createPngCopy', gulp.series('createSprite', function() {
  return gulp.src(cons.temp + '/sprite/css/*.svg')
      .pipe(svg2png())
      .pipe(gulp.dest(cons.temp + '/sprite/css'))
}));

gulp.task('copySpriteGraphic', gulp.series('createPngCopy', function() {
  return gulp.src(cons.temp + '/sprite/css/**/*.{svg,png}')
     .pipe(gulp.dest(cons.dist + '/sprites'));
}));

gulp.task('copySpriteCss', gulp.series('createSprite', function() {
  return gulp.src(cons.temp + '/sprite/css/**/*.css')
  .pipe(rename('_sprite.scss'))
  .pipe(gulp.dest(cons.src + '/styles/custom'));
}));

gulp.task('endClean', gulp.series(['copySpriteGraphic','copySpriteCss'], function() {
  return del([cons.temp + '/sprite']);
}));

gulp.task('sprites', gulp.series(['styles','beginClean','createSprite', 'createPngCopy', 'copySpriteGraphic', 'copySpriteCss', 'endClean']));
