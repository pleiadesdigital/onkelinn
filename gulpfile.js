"use strict";

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var maps = require('gulp-sourcemaps');
var del = require('del');
var useref = require('gulp-useref');
var gulpif = require('gulp-if');
var cleancss = require('gulp-clean-css');

var options = {
	src: 'src',
	dist: 'dist'
}

// CONCAT SCRIPTS
gulp.task('concatScripts', function(){
	return gulp.src([
		'js/navigation.js',
		'js/skip-link-focus-fix.js',
		'js/app.js'
	])
	.pipe(concat('main.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('js'));
}); //concatScripts

// COMPILE COMPASS
gulp.task('compileCompass', function(){
	return gulp.src('sass/style.scss')
	.pipe(compass({
		sourcemap: true,
		css: '',
		sass: 'sass',
		image: 'images',
		style: 'expanded',
		comments: true,
		require: ['susy', 'breakpoint']
	}))
	.pipe(gulp.dest(''));
}); //compileCompass

// WATCH FILES
gulp.task('watchFiles', function(){
	gulp.watch('sass/**/*.scss', ['compileCompass']);

}); //watchFiles

// CLEAN FILES
gulp.task('clean', function(){
	del(['dist', 'style.css*', 'js/main.min.js*']);
}); //clean

// USE-REF COMPRESS FILES
gulp.task('compressCSS', ['compileCompass'], function(){
	return gulp.src(['style.css'])
	.pipe(useref())
	.pipe(gulpif('*.css', cleancss()))
	.pipe(gulp.dest(options.dist));
}); //compressCSS

// BUILD
gulp.task('build', ['clean', 'compressCSS', 'concatScripts' ], function(){
	return gulp.src(['images/**', 'fonts/**', 'js/main.min.js'], {base: './'})
	.pipe(gulp.dest(options.dist))
}); //build

// DEFAULT
gulp.task('default', ['watchFiles']);
























