var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');
jshint = require('gulp-jshint'),
    jshintStylish = require('jshint-stylish'),
    csslint = require('gulp-csslint')
cssmin = require('gulp-cssmin');
clean = require('gulp-clean');
concat = require('gulp-concat');
htmlReplace = require('gulp-html-replace');


gulp.task('copy', ['clean'], function () {
    return gulp.src('assets/front/**/*')
        .pipe(gulp.dest('dist'));
});

gulp.task('clean', function () {
    return gulp.src('dist')
        .pipe(clean());
});

gulp.task('build-css', function () {
    gulp.src('dist/css/**/*.css')
        .pipe(concat('all.css'))
        .pipe(gulp.dest('dist/css'));
});

gulp.task('build-html', function () {
    gulp.src('dist/**/*.html')
        .pipe(htmlReplace({
            css: 'all.css'
        }))
        .pipe(gulp.dest('dist'));

});

gulp.task('server', function () {
    browserSync.init({
        proxy: 'localhost/Projetos/Paneladm'
    });
    gulp.watch('**/*.php').on('change', browserSync.reload);
    gulp.watch('/assets/front/css/*.css').on('change',browserSync.reload);
    gulp.watch('assets/front/js/*.js').on('change',browserSync.reload);

}); 