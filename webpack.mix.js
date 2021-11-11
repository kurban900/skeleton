const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.setPublicPath('public/build')
    .setResourceRoot('/build/')
    .js('resources/assets/js/app.js', 'js')
    .browserSync({
        proxy: 'localhost',
        open: false,
        notify: {
            styles: {
                top: 'auto',
                left: 'auto'
            }
        },
    })
    // .js('resources/assets/js/admin.js', 'js')
    .sass('resources/assets/scss/app.scss', 'css')
    // .sass('resources/assets/scss/admin.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .version();
