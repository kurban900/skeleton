const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.setPublicPath('public/build')
    .setResourceRoot('/build/')
    .js('resources/assets/js/app.js', 'js')
    // .js('resources/assets/js/admin.js', 'js')
    .sass('resources/assets/scss/app.scss', 'css')
    // .sass('resources/assets/scss/admin.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .version();
