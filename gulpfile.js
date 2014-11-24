var gulp 			= require('gulp'),
	watch			= require('gulp-watch'),
	gutil			= require('gulp-util'),
	sass			= require('gulp-ruby-sass'),
	// autoprefixer	= require('gulp-autoprefixer'),
	minifycss		= require('gulp-minify-css'),
	rename			= require('gulp-rename'),
	browserSync		= require('browser-sync'),
	notify			= require('gulp-notify');

gulp.task('browser-sync', function() {
	var files = [
		'**/*.php'
	];

	browserSync.init(files, {
		proxy: 'thepark:8888/'
	});

});

gulp.task('sass', function() {
		gulp.src('sass/**/*.scss')
		.pipe(sass({
			style: 'expanded',
			lineNumbers: true
		}))
		// .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
		.pipe(minifycss({
			keepSpecialComments:0
		}))
		.pipe(gulp.dest('.'))
		// .pipe(filter('**/*.css')) 
		.pipe(browserSync.reload({stream:true}))
		.pipe(notify({
			message: "You just got super Sassy!"
		}));

});


gulp.task('default', ['sass', 'browser-sync'], function () {
	gulp.watch('sass/**/*.scss', ['sass']);
});