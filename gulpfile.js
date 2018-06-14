'use strict';

var gulp = require( 'gulp' );
var sass = require( 'gulp-sass' );
var cssnano = require( 'gulp-cssnano' );
var rename = require( 'gulp-rename' );
var sourcemaps = require( 'gulp-sourcemaps' );
var autoprefixer = require( 'gulp-autoprefixer' );

gulp.task('workflow', function () {
	gulp.src('./src/sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
    .pipe(rename( { suffix: '.min' } ) )
		.pipe(cssnano( { discardComments: { removeAll: true } } ) )
		.pipe(sourcemaps.write('./'))

	.pipe(gulp.dest('./css/'))
});

gulp.task('default', function () {
	gulp.watch('./src/sass/**/*.scss', ['workflow']);
});
