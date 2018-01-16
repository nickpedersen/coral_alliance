const browsersync = require("browser-sync");
const gulp = require("gulp");
const sass = require("gulp-sass");
const rename = require("gulp-rename");
const insert = require("gulp-insert");

// Configuration:
const config = {
  slug: "coral_alliance",
  name: "Coral Alliance",
  author: "Nicholas Pedersen",
  version: "0.0.1"
};

const styleHeader = `
/*
  Theme Name: ${config.name}
  Author: ${config.author}
  Version: ${config.version}
*/
`;

const outputFolder = `../wp-content/themes/${config.slug}`;

// Dev task - start browsersync proxy for live reload
gulp.task("browser-sync", function() {
  browsersync.init({
    proxy: "localhost"
  });
});

// Dev task - reload browsers, called when files change
gulp.task("reload", function() {
  browsersync.reload();
});

// Compile sass and attatches Wordpress header
gulp.task("sass", function() {
  return gulp
    .src("./sass/index.scss")
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(rename("style.css"))
    .pipe(insert.prepend(styleHeader))
    .pipe(gulp.dest(outputFolder));
});

// Copy php files
gulp.task("php", function() {
  return gulp.src(["./php/**/*.php"]).pipe(gulp.dest(outputFolder));
});

// Copy images files
gulp.task("images", function() {
  return gulp.src(["./images/**/*"]).pipe(gulp.dest(`${outputFolder}/images`));
});

// Copy images files
gulp.task("javascript", function() {
  return gulp.src(["./js/**/*.js"]).pipe(gulp.dest(`${outputFolder}/scripts`));
});

// Copy screenshot
gulp.task("screenshot", function() {
  return gulp.src(["./screenshot.png"]).pipe(gulp.dest(`${outputFolder}`));
});

// Dev task - watch for changes in scss files
gulp.task("watch", function() {
  gulp.watch("./sass/*.scss", ["sass"]);
  gulp.watch("./php/**/*", ["php"]);
  gulp.watch(["./sass/*.scss", "./php/**/*"], ["reload"]);
});

// Dev
gulp.task("default", [
  "php",
  "sass",
  "javascript",
  "images",
  "screenshot",
  "browser-sync",
  "watch"
]);

// Build
gulp.task("build", ["php", "sass", "javascript", "images", "screenshot"]);
