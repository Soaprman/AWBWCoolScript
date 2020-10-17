const gulp = require('gulp');
const sass = require('gulp-sass');
const browserify = require('browserify');
const vinylBuffer = require('vinyl-buffer');
const vinylSourceStream = require('vinyl-source-stream');
const applyUserscriptHeader = require('./streams/applyUserscriptHeader');

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


gulp.task('scripts', function () {
    return browserify('./src/js/app.js')
    .bundle()
    .pipe(applyUserscriptHeader())
    .pipe(vinylSourceStream('bundle.js'))
    .pipe(gulp.dest('output'));
});



gulp.task('default', gulp.parallel('styles', 'scripts'));

