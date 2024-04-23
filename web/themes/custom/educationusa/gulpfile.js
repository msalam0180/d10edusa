var gulp = require("gulp");
var babel = require("gulp-babel");
var jshint = require("gulp-jshint");
var babelify = require("babelify");
var browserify = require("browserify");
var buffer = require("vinyl-buffer");
var source = require("vinyl-source-stream");
var uglify = require("gulp-uglify");
var sass = require("gulp-sass");
var bulkSass = require("gulp-sass-bulk-import");
var neat = require("node-neat").includePaths;
var sourcemaps = require("gulp-sourcemaps");
var autoprefixer = require("autoprefixer");
var postcss = require("gulp-postcss");

function logError(error) {
  console.log(error.toString());
  this.emit("end");
}

gulp.task("scripts", function() {
  var bundler = browserify({
    entries: "src/js/script.js",
    debug: true
  });
  bundler.transform(babelify);

  return bundler
    .bundle()
    .on("error", logError)
    .pipe(source("script.js"))
    .pipe(buffer())
    .pipe(
      sourcemaps.init({
        loadMaps: true
      })
    )
    .pipe(uglify())
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("js"));
});

  // off by default
gulp.task("lint", function() {
  return gulp
    .src("src/js/**/*.js")
    .pipe(jshint())
    .on("error", logError)
    .pipe(jshint.reporter("jshint-stylish"));
});

gulp.task("sass", function() {
  var plugins = [autoprefixer()];

  return gulp
    .src("src/scss/*.scss")
    .pipe(sourcemaps.init())
    .pipe(bulkSass())
    .pipe(
      sass({
        includePaths: ["sass"].concat(neat)
      })
    )
    .on("error", sass.logError)
    .pipe(postcss(plugins))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("css"));
});

gulp.task('watch', function() {
   gulp.watch("src/js/*.js",  gulp.series('scripts'));
   gulp.watch("src/js/**/*.js",  gulp.series('scripts'));
   gulp.watch("src/scss/*.scss",  gulp.series('sass'));
   gulp.watch("src/scss/**/*.scss",  gulp.series('sass'));
});

gulp.task('default',gulp.series('sass','scripts', 'watch'));
