const gulp = require('gulp');
const sass = require('gulp-sass');
const browserify = require('browserify');
const vinylSourceStream = require('vinyl-source-stream');

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

gulp.task('browserify', function () {
    return browserify('./src/js/app.js')
    .bundle()
    .pipe(vinylSourceStream('bundle.js'))
    .pipe(gulp.dest('output'));
});

gulp.task('scripts', gulp.series('browserify'));

gulp.task('default', gulp.parallel('styles', 'scripts'));

