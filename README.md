## Coral Alliance
This repository includes a full Wordpress installation and a `src` folder, with the source files used to generate the theme.

# To get started:
- In the root of this directory there is a `wordpress.sql` file that contains a full database dump
- The `wp-config.php` file is assuming a username of `root` and no password, you might need to change this to suit your database setup
- The Wordpress credentials are:
  - Username: `coral_alliance`
  - Password: `M%ZqoC4sZ#(Sii%Dh)`
- The database dump is expecting Wordpress to be running on `http://localhost`, you might need to change this in the table `wp_options`, look for the names `siteurl` and `home`.
- The important files for review can be found in the `src` directory, the Gulp tasks simply copies these files to the theme folder and process the Sass files.

Alternatively, you can find a hosted version at: http://coralalliance.nickpedersen.com

# Technologies:
- Advanced Custom Fields - to allow the user to easily edit content on pages that don't follow the standard "Title and Content" structure.
- Sass - Sass makes it easy to write styles using BEM (Block, Element, Modifier) by allowing nesting and reducing repetition. It's also useful to set up variables early and to do basic maths.
- Gulp - The current `gulpfile` is really only copying assets to the theme folder and processing the Sass files, but this could be extended to minify Javascript, process images, etc.
- Browsersync - Live reloading of changes to make rapid development easier.

# Room for further improvement:
- No meta information such as keywords and images for social sharing
- Images are large and bandwidth heavy
- Many of the basic Wordpress pages are missing. (E.g. 404 page)

# Gulp tasks:
- Before running Gulp tasks, navigate to the `src` folder and run `npm install`.
- Using Gulp assumes that you have `node`, `npm`, and `gulp` installed.
- To launch a development environment, navigate to the `src` folder and run `$ gulp`.
- To build the theme for production, navigate to the `src` folder and run `$ gulp build`.
