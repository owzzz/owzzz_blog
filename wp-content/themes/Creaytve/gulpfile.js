var gulp = require('gulp');
var ftp = require('gulp-ftp');

gulp.task('default', function () {
    gulp.src('src/*')
        .pipe(ftp({
            host: 'website.com',
            user: 'johndoe',
            pass: '1234'
        }));
});