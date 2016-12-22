/**
 * Created by shawnsandy on 8/14/16.
 */
var gulp = require('gulp');
var q = require('q');
var path = require('path');
var fs = require('fs');
var Grunticon = require('grunticon-lib');
var _ = require('underscore');
var imagemin = require('gulp-imagemin');
var sass = require('gulp-sass');
var notify = require('gulp-notify');
var changed = require('gulp-changed');

const icons = function (iconsDir, outputDir) {
    var deferred = q.defer(),
        iconDir = iconsDir;

    options = {enhanceSVG: true};

    var files = fs.readdirSync(iconDir).map(function (fileName) {
        return path.join(iconDir, fileName);
    });

    var grunticon = new Grunticon(files, 'src/public/icons/' + outputDir, options);

    grunticon.process(function () {
        deferred.resolve();
    });
    return deferred.promise;

};

gulp.task('icons:entypo', function () {
    icons('svgs/entypo_385_icons/SVG/', 'entypo');
});

gulp.task('icons:material', function () {
    icons('svgs/material_845_icons/SVG/', 'material');
});

gulp.task('icons:social', function () {
    icons('svgs/pk-social/SVG/', 'social');
});

gulp.task('images', function(){
    return gulp.src('images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('src/img/'))
});

gulp.task('copy:fonts', function(){
    gulp.src('./node_modules/bootstrap-sass/assets/**/*.*')
        .pipe(gulp.dest('./src/public/css/fonts/'));
} );

gulp.task('build', function(){
    gulp.src([
        './node_modules/aos/dist/**/*.*',
    ], { 'base' : 'node_modules'})
        .pipe(gulp.dest('src/public/assets/'))
});



var scss_files = ['./src/resources/assets/**/*.scss']
gulp.task('sass', function() {
    return gulp.src('./src/resources/assets/**/*.scss', {'base' : './src/resources/assets/'})
    .pipe(changed('./src/resources/assets/**/*.scss'))
    .pipe(sass().on('error', sass.logError))
    .pipe(notify('Sass compiled...'))
    .pipe(gulp.dest('./src/resources/assets'))
})

gulp.task('watch:sass', function(){
    gulp.watch('./src/resources/assets/**/*.scss', ['sass']);
})

