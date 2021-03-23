const mix = require("laravel-mix");

mix.postCss("resources/css/app.css", "public/css").options({
    postCss: [require("@tailwindcss/jit")],
});

mix.browserSync("whujo.test");
