const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.postCss("resources/css/app.css", "public/css")
    .options({
        postCss: [require("@tailwindcss/jit")]
    })
    .css("resources/css/vuesax.css", "public/css/vuesax.css")
    .js("resources/js/app.js", "public/js")
    .vue()
    .version();

mix.browserSync("whujo-1.test");
