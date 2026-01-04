const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cleanCSS = require('gulp-clean-css');

// Paths
const paths = {
  scss: './src/*.scss',
  html: 'src/**/*.html',
  php: 'src/**/*.php',
  dist: './dist'
};

// Compilar SCSS (SOLO main.scss)
function css() {
  return src(paths.scss)
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCSS({ level: 2 }))
    .pipe(dest(`${paths.dist}/css`));
}

// Copiar HTML y PHP
function copyHtmlPhp() {
  return src([paths.html, paths.php], { base: 'src' })
    .pipe(dest(paths.dist));
}

// Watch
function watchFiles() {
  watch('./src/**/*.scss', css);
  watch([paths.html, paths.php], copyHtmlPhp);
}

// Build
const build = parallel(css, copyHtmlPhp, watchFiles);

// Exportar tareas
exports.css = css;
exports.build = build;
exports.watch = watchFiles;
exports.default = series(build, watchFiles);
