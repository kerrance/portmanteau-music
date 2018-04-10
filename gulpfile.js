var gulp = require('gulp'),
    htmlmin = require('gulp-htmlmin'),
    sass = require('gulp-sass'),
    cssnano = require('cssnano'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    src = {
      scss: 'app/scss/*.scss',
      php: ['app/*.php', 'app/**/*.php'],
      images: ['app/images/*', 'app/images/**/*'],
      js: [
        'app/js/*',
        'bower_components/jquery/dist/jquery.js',
        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
      ]
    },
    dest = 'build/';

gulp.task('buildPhp', function(){
  return gulp.src(src.php)
  .pipe(gulp.dest(dest));
});

gulp.task('minifyPhp', function(){
  return gulp.src(src.php)
  .pipe(htmlmin({
    collapseWhitespace: true
  }))
  .pipe(gulp.dest(dest));
});

gulp.task('buildStyles', function(){
  return gulp.src(src.scss)
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest(dest + 'css'))
  .pipe(reload({stream: true}));
});

gulp.task('minifyStyles', function(){
  var plugins = [
    autoprefixer({browsers: ['last 1 version']}),
    cssnano()
  ];
  return gulp.src(src.scss)
  .pipe(sass().on('error', sass.logError))
  .pipe(postcss(plugins))
  .pipe(gulp.dest(dest + 'css'))
});

gulp.task('buildImages', function(){
  return gulp.src(src.images)
  .pipe(gulp.dest(dest + 'images'))
});

gulp.task('minifyImages', function(){
  return gulp.src(src.images)
  .pipe(imagemin())
  .pipe(gulp.dest(dest + 'images'))
});

gulp.task('buildJs', function() {
	return gulp.src(src.js)
	.pipe(gulp.dest(dest + 'js'));
});

gulp.task('minifyJs', function() {
	return gulp.src(src.js)
  .pipe(uglify())
	.pipe(gulp.dest(dest + 'js'));
});

gulp.task('browserSync', ['php'], function(){
  browserSync.init({
    proxy: '127.0.0.1:8010',
    port: 8080,
    open: true,
    notify: false
  });
});

gulp.task('php', function (){
  connect.server({
    base: dest,
    port: 8010,
    keepalive: true
  });
});

gulp.task('default', ['buildPhp', 'buildStyles', 'buildImages', 'buildJs']);
gulp.task('watch', ['browserSync'], function(){
  gulp.watch(src.php, ['buildPhp']);
  gulp.watch(['app/scss/*.scss', 'app/scss/**/*.scss'], ['buildStyles']);
  gulp.watch(src.images, ['buildImages']);
  gulp.watch(src.js, ['buildJs']);
  gulp.watch(src.php).on('change', reload);
});
gulp.task('production', ['minifyPhp', 'minifyStyles', 'minifyImages', 'minifyJs'])
