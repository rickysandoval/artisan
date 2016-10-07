var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require("gulp-rename");

gulp.task('sass', function() {
	return gulp.src('./sass/main.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(rename("custom.css"))
	.pipe(gulp.dest("./css"));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});