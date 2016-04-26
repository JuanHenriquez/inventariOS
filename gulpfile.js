'use strict';

var gulp      = require("gulp"),
    rename    = require("gulp-rename"),
    minifyCSS = require("gulp-clean-css"),
    minifyJS  = require("gulp-uglify"),
    sass      = require("gulp-sass");
    
gulp.task('update', function(){
    
    gulp.src('./bower_components/Materialize/sass/**/', {base: './bower_components/Materialize/sass/'})
        .pipe(gulp.dest('./dist/css/materialize/'));
        
    gulp.src('./bower_components/Materialize/dist/js/materialize.min.js')
        .pipe(gulp.dest('./dist/js/'));
        
    gulp.src('./bower_components/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('./dist/js/'));
    
});

gulp.task('sassMain', function(){
    console.log("Scss compilado.");
    gulp.src('./dist/css/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCSS({debug: true}, function(details){
            console.log("The file " + details.name + "(" +  details.stats.originalSize + "kb)" + " has been compresed to " + details.stats.minifiedSize + "kb");
        }))
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./dist/css'))
});

gulp.task('sassAdmin', function(){
    console.log("Scss compilado.");
    gulp.src('./dist/css/style-admin.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCSS({debug: true}, function(details){
            console.log("The file " + details.name + "(" +  details.stats.originalSize + "kb)" + " has been compresed to " + details.stats.minifiedSize + "kb");
        }))
        .pipe(rename('style-admin.min.css'))
        .pipe(gulp.dest('./dist/css'))
});

gulp.task('sassProducts', function(){
    console.log("Scss compilado.");
    gulp.src('./dist/css/style-products.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCSS({debug: true}, function(details){
            console.log("The file " + details.name + "(" +  details.stats.originalSize + "kb)" + " has been compresed to " + details.stats.minifiedSize + "kb");
        }))
        .pipe(rename('style-products.min.css'))
        .pipe(gulp.dest('./dist/css'))
});

gulp.task('minJs', function() {
    
    console.log('Se ha minificado app.js');
    gulp.src('./dist/js/app.js')
        .pipe(minifyJS())
        .pipe(rename('app.min.js'))
        .pipe(gulp.dest('./dist/js/'))
    
});

gulp.task('watch', function() {
    
    gulp.watch('./dist/js/app.js', ['minJs']);
    gulp.watch('./dist/css/*.scss', ['sassMain', 'sassAdmin', 'sassProducts']);
    
})
