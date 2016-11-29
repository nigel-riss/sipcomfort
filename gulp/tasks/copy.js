var gulp = require('gulp'),
    rename = require('gulp-rename');

gulp.task('copyPHP', function() {
    gulp.src('./src/*.php')
        .pipe(gulp.dest('G:/_xampp/htdocs/sip/wp-content/themes/sip/'));
});

gulp.task('copyCSS', function() {
    gulp.src('./src/css/styles.css')
        .pipe(rename('style.css'))
        .pipe(gulp.dest('G:/_xampp/htdocs/sip/wp-content/themes/sip/'));
});