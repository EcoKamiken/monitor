var gulp = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

gulp.task('copy', function() {
    return gulp.src('public/index.php')
    .pipe(gulp.dest('assets'))
});

gulp.task('sass', function() {
    return gulp.src('styles/main.scss')
    .pipe(sass({style: 'expanded'}))
        .on('error', gutil.log)
    .pipe(gulp.dest('assets'))
});

gulp.task('js', function() {
    return gulp.src('scripts/*.js')
    .pipe(uglify())
    .pipe(concat('script.js'))
    .pipe(gulp.dest('assets'))
});

gulp.task('watch', function() {
    gulp.watch('scripts/*.js', gulp.series('js'));
    gulp.watch('styles/main.scss', gulp.series('sass'));
});

gulp.task('server', function() {
    connect.server({
        port: 8001,
        base: 'public'
    }, function() {
        browserSync({
            files: [
                "public/templates/*",
                "public/*",
                "assets/*"
            ],
            proxy: 'localhost:8001'
        });
    });
});