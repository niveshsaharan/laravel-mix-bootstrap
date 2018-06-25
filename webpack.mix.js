let mix = require('laravel-mix');

mix.setPublicPath('public');
mix.sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/app.js', 'public/js');

mix.browserSync({
    proxy: process.env.APP_URL ? process.env.APP_URL : "local.test",
    files: [
        'public/js/**/*.js',
        'public/css/**/*.css'
    ],
    watchOptions: {
        usePolling: true,
        interval: 500
    },
    https: process.env.SSL_KEY && process.env.SSL_CERT ? {
        key: process.env.SSL_KEY,
        cert: process.env.SSL_CERT
    } : false
});