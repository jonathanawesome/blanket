"use strict";

import gulp from 'gulp';
import autoprefixer from 'gulp-autoprefixer';
import concat from 'gulp-concat';
import include from 'gulp-include';
import lineec from 'gulp-line-ending-corrector';
import notify from 'gulp-notify';
import sass from 'gulp-sass';
import sourcemaps from 'gulp-sourcemaps';
import babel from 'gulp-babel';
let uglify = require('gulp-uglify-es').default;

const AUTOPREFIXER_BROWSERS = [
  "last 1 version",
  "> 1%",
];

gulp.task("styles", () => {
  gulp
    .src("./_/assets/css/style.scss")
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        errLogToConsole: true,
        outputStyle: "compressed",
        keepSpecialComments: 1,
        precision: 10
      })
    )
    .on("error", console.error.bind(console))
    .pipe(sourcemaps.write({ includeContent: false }))
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(sourcemaps.write("./"))
    .pipe(lineec())
    .pipe(gulp.dest("./"))
    .pipe(notify({ message: 'TASK: "styles" Completed.', onLast: true }));
});

gulp.task("editor-styles", () => {
  gulp
    .src("./_/admin/css/style.scss")
    .pipe(
      sass({
        errLogToConsole: true,
        outputStyle: "compressed",
        keepSpecialComments: 1,
        precision: 10
      })
    )
    .on("error", console.error.bind(console))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(lineec())
    .pipe(gulp.dest("./_/admin/css/"))
    .pipe(
      notify({ message: 'TASK: "editor-styles" Completed.', onLast: true })
    );
});

gulp.task("scripts", () => {
  return (
    gulp
      .src("./_/assets/js/entry.js")
      .pipe(include())
      .pipe(sourcemaps.init())
      .pipe(babel())
      .pipe(concat("app.min.js"))
      .pipe(uglify({
        mangle: true,
        toplevel: true,
      }))
      .pipe(sourcemaps.write('_/assets/maps'))
      .pipe(gulp.dest("./"))
      .pipe(notify({ message: "Site scripts task complete", onLast: true }))
  );
});

gulp.task("default", ["watch"]);

gulp.task("watch", () => {
  gulp.watch("_/assets/css/*", ["styles"]); // gulp watch for style changes
  gulp.watch("_/assets/js/*.js", ["scripts"]); // gulp watch for script changes});
  gulp.watch("_/admin/css/*", ["editor-styles"]); // gulp watch for editor style changes
});