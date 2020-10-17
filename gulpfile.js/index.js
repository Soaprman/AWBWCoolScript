// Gulp
const gulp = require('gulp');
const stream = require('vinyl-source-stream');
const transform = require('gulp-transform');

// For styles
const sass = require('gulp-sass');

// For scripts
const browserify = require('browserify');

// Custom stuff
const prependChangelog = require('./transforms/prependChangelog');
const prependUserscriptHeader = require('./transforms/prependUserscriptHeader');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('output'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./scss/**/*.scss', ['sass']);
});

gulp.task('styles', gulp.series('sass'));


gulp.task('buildThickScript', function () {
    return browserify('./src/js/thick.js')
        .bundle()
        .pipe(stream('AWBWCoolScript-Thick.js'))
        .pipe(transform('utf8', prependChangelog))
        .pipe(transform('utf8', prependUserscriptHeader))
        .pipe(gulp.dest('output'));
});



gulp.task('default', gulp.parallel('styles', 'buildThickScript'));

