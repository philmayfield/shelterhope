// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var concatcss = require('gulp-concat-css');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var imagemin = require ('gulp-imagemin');
var pngquant = require ('imagemin-pngquant');
var autoprefixer = require ('gulp-autoprefixer');

// Compile Our Sass
function styles() {
    return gulp.src(['./css/normalize.css', './css/main.css', './css/font-awesome.min.css'])
        .pipe(concatcss('main.min.css'))
        .pipe(cssmin())
        .pipe(gulp.dest('./css'));
}

// Concatenate & Minify JS
function scripts() {
    return gulp.src(['./js/vendor/instagram.js', './js/plugins.js', './js/droptab.js', './js/main.js'])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js'));
}

// Optimize images
function images() {
    return gulp.src('./img-pre/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./img/'));
}

// Watch Files For Changes
function watch() {
    gulp.watch('./css/main.css', ['css']);
}

// Default Task
var build = gulp.series(styles, scripts, images);

exports.styles = styles;
exports.scripts = scripts;
exports.images = images;

exports.default = build;