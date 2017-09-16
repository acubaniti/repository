
// include the required packages. 
var gulp = require('gulp'); 
var stylus = require('gulp-stylus'); 
 
// Get one .styl file and render 
gulp.task('one', function () {
  return gulp.src('./resources/assets/stylus/app.styl')
    .pipe(stylus())
    .pipe(gulp.dest('./public/css'));
});
 
// Options 
// Options compress 
gulp.task('compress', function () {
  return gulp.src('./resources/assets/stylus/app.styl')
    .pipe(stylus({
      compress: true
    }))
    .pipe(gulp.dest('/public/css'));
});
  
// Default gulp task to run 
gulp.task('default', ['one', 'compress']);
 