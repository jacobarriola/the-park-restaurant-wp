var gulp 			= require('gulp'),
	watch			= require('gulp-watch'),
	sass			= require('gulp-ruby-sass'),
	autoprefixer	= require('gulp-autoprefixer'),
	minifycss		= require('gulp-minify-css'),
	// rename			= require('gulp-rename'),
	browserSync		= require('browser-sync'),
	filter			= require('gulp-filter')
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
		.pipe(filter('**/*.css')) // ensures only *.css files reach .reload
		.pipe(autoprefixer('last 2 versions', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
		// .pipe(gulp.dest('.'))
		// .pipe(rename({suffix: '.min'}))		
		.pipe(minifycss({
			keepSpecialComments:0
		}))
		.pipe(gulp.dest('.'))
		.pipe(browserSync.reload({stream:true}))
		.pipe(notify({
			message: "You just Sassified your files!"
		}));

});


gulp.task('default', ['sass', 'browser-sync'], function () {
	gulp.watch('sass/**/*.scss', ['sass']);
});