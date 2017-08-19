let mix = require('laravel-mix');

mix.disableNotifications();
mix.sass('resources/assets/sass/app.scss', 'public/css');
