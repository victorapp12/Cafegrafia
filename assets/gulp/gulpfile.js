var gulp = require('gulp');
var gutil = require('gulp-util');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var sh = require('shelljs');

var paths = {
    sass: ['../sass/**/*.scss'],
    js: [
       '../js/**/*.js'
   ]
};

function swallowError(error) {
    console.log(error.toString());
    this.emit('end');
}

gulp.task('default', ['sass']);

gulp.task('sass', function (done) {
    gulp.src('../sass/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('../css/'))
        .on('end', done);
});

gulp.task('minify-css', function() {
  gulp.src('../css/style.css')
    .pipe(minifyCss({keepBreaks:true}))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest('../css/'));
});

gulp.task('watch', ['sass'], function () {
    gulp.watch(paths.sass, ['sass', 'minify-css']);
});
