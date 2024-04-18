const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', ()=>
    gulp.src('./src/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./dist/css'))
);

gulp.task('assets', function() {
    return gulp.src('src/assets/**/*')
        .pipe(gulp.dest('dist/assets'));
});

gulp.task('vendor', function() {
    return gulp.src('src/vendor/**/*')
        .pipe(gulp.dest('dist/vendor'));
});

gulp.task('html', function() {
    return gulp.src('src/**/*.html')
        .pipe(gulp.dest('dist'));
    });

  // Tarea para copiar archivos PHP de src a dist
gulp.task('php', function() {
    return gulp.src('src/**/*.php')
        .pipe(gulp.dest('dist'));
    });

gulp.task('watch-sass', function() {
    gulp.watch('./src/*/*.scss', gulp.series('sass'));
});

gulp.task('build', gulp.parallel('sass', 'assets', 'vendor', 'html', 'php'));