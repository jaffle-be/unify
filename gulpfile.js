var gulp = require('gulp'),
    SubTask = require('gulp-subtask')(gulp),
    debug = require('gulp-debug'),
    tap = require('gulp-tap'),
    less = require('gulp-less'),
    minify = require('gulp-minify-css'),
    copy = require('gulp-copy'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    watch = require('gulp-watch'),
    cached = require('gulp-cached'),
    maps = require('gulp-sourcemaps'),
    fs = require('fs'),
    glob = require('glob');



gulp.task('default', ['theme-page-styles']);

//global startup compiler
gulp.task('theme-page-styles', function()
{
    gulp.src('resources/assets/less/pages/**/*.less')
        .pipe(plumber())
        //.pipe(debug({title: 'compile page styles'}))
        .pipe(less())
        .pipe(rename(function(path){
            path.extname = '.css';
        }))
        .pipe(gulp.dest('resources/assets/css/pages/'))
        .pipe(minify())
        .pipe(rename(function(path){
            path.extname = '.min.css';
        }))
        .pipe(gulp.dest('resources/assets/css/pages/'));
});