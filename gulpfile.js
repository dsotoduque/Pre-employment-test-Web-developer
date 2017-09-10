var minify = require('gulp-minify');

gulp.task('compress', function(){

	gulp.src('src/js/*.js').pipe(minify({ext:{src:'.min.js'},exclude:['tasks'], ignoreFiles:['.combo.js', '-min.js']}))
	.pipe(gulp.dest('dist'))
});