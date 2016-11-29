var gulp = require('gulp'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync');

// CSSInject task
gulp.task('cssInject', ['sass'], function() {
    return gulp.src('./src/css/styles.css')
        .pipe(browserSync.stream());
});

gulp.task('watch', function() {
    browserSync.init({
        server: {
            baseDir: 'src'
        }
    });

    watch('./src/*.html', function() {
        browserSync.reload();
    });

    watch('./src/*.php', function() {
        gulp.start('copyPHP');
    });

    watch('./src/sass/**/*.scss', function() {
        gulp.start('sass');
    });

    watch('./src/css/**/*.css', function() {
        gulp.start('copyCSS');
        gulp.start('cssInject');
    });
});