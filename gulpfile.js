var gulp = require('gulp'),
  connect = require('gulp-connect'),
  sass = require('gulp-sass');

gulp.task('webserver', function() {
  connect.server({
    livereload: true
  });
});

gulp.task('sass', function() {
  gulp.src('css/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('css'))
    .pipe(connect.reload());
});

gulp.task('watch', function() {
    gulp.watch('css/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'webserver', 'watch']);

