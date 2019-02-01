const gulp = require('gulp');
const gutil = require('gulp-util');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const babel = require('gulp-babel');

gulp.task('sass', function() {
    return gulp.src('resources/sass/main.scss')
    .pipe(sass({style: 'expanded'}))
        .on('error', gutil.log)
    .pipe(gulp.dest('public/css'))
});

gulp.task('babel', function() {
    return gulp.src('./resources/js/index.js')
    .pipe(babel())
    .pipe(gulp.dest('./dist'))
})

gulp.task('watch', function() {
    gulp.watch('resources/sass/main.scss', gulp.series('sass'));
    gulp.watch('resources/js/index.js', gulp.series('babel'));
});

gulp.task('server', function() {
    browserSync({
        proxy: {
            target: "localhost:10000"
        },
        files: [
            "public/**/*.php",
            "public/js/*.js",
            "public/css/*.css",
        ]
    });
});