const mix = require("laravel-mix");

mix.postCss("resources/css/app.css", "public/css")
    .options({
        postCss: [require("@tailwindcss/jit")],
    })
    .js("resources/js/app.js", "public/js");

mix.browserSync("localhost");
