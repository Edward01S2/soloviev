const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./dist')
  .browserSync('soloviev.test');

// mix
//   .sass('resources/assets/styles/app.scss', 'styles')
//   .sass('resources/assets/styles/editor.scss', 'styles')
//   .options({
//     processCssUrls: false,
//     postCss: [ require('tailwindcss')('./tailwind.config.js')]
//  });
mix.postCss('resources/assets/styles/app.css', 'styles', [
  require('postcss-import'),
  require('tailwindcss'),
  require('postcss-nested'),
  require('autoprefixer')
])
  .options({
    processCssUrls: false,
  })
  // .purgeCss({
  //   extend: { content: [path.join(__dirname, 'index.php')] },
  //   whitelist: require('purgecss-with-wordpress').whitelist,
  //   whitelistPatterns: require('purgecss-with-wordpress').whitelistPatterns,
  // });

mix
  .js('resources/assets/scripts/app.js', 'scripts')
  .js('resources/assets/scripts/customizer.js', 'scripts')
  .blocks('resources/assets/scripts/editor.js', 'scripts')
  .extract();

mix
  .copyWatched('resources/assets/images/**', 'dist/images')
  .copyWatched('resources/assets/fonts/**', 'dist/fonts');


if (!mix.inProduction()) {
  mix.sourceMaps(false, 'source-map')
}

mix
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .version();
