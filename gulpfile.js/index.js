// Gulp
const gulp = require('gulp');
const stream = require('vinyl-source-stream');
const transform = require('gulp-transform');

// For styles
const sass = require('gulp-sass');

// For scripts
const browserify = require('browserify');

// Custom stuff
const applyUserscriptHeader = require('./transforms/applyUserscriptHeader');

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
        .pipe(stream('bundle.js'))
        .pipe(transform('utf8', applyUserscriptHeader))
        .pipe(gulp.dest('output'));
});



gulp.task('default', gulp.parallel('styles', 'scripts'));

