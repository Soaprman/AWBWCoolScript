// Gulp
const gulp = require('gulp');
const fileInclude = require('gulp-file-include');
const stream = require('vinyl-source-stream');
const transform = require('gulp-transform');

// For styles
const sass = require('gulp-sass');

// For scripts
const browserify = require('browserify');

// Custom stuff
const injectCss = require('./transforms/injectCss');
const injectHtml = require('./transforms/injectHtml');
const prependChangelog = require('./transforms/prependChangelog');
const prependUserscriptHeader = require('./transforms/prependUserscriptHeader');
const package = require('../package.json');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('output'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./scss/**/*.scss', ['sass']);
});

gulp.task('buildCss', gulp.series('sass'));

gulp.task('buildHtml', function () {
    return gulp.src('src/html/index.html')
        .pipe(fileInclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest('output'));
});

gulp.task('buildThickScript', function () {
    // TODO: Add Thick to the filename after implementing Thin
    return browserify('./src/js/thick.js')
        .bundle()
        .pipe(stream(`AWBWCoolScript-${package.version}.user.js`))
        .pipe(transform('utf8', prependChangelog))
        .pipe(transform('utf8', prependUserscriptHeader))
        .pipe(gulp.dest('output'));
});

gulp.task('injectCssAndHtml', function () {
    return gulp.src(`output/AWBWCoolScript-${package.version}.user.js`)
        .pipe(transform('utf8', injectCss))
        .pipe(transform('utf8', injectHtml))
        .pipe(gulp.dest('output'));
});



gulp.task('default', gulp.series(gulp.parallel('buildCss', 'buildHtml', 'buildThickScript'), 'injectCssAndHtml'));

