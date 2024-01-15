const mix = require('laravel-mix');
mix.setPublicPath('public')
    .setResourceRoot('/');
mix.js('resources/js/*.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').version();

