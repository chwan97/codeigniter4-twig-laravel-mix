let mix = require('laravel-mix');

mix.js('app/Assets/js/page1.js', 'js/').react()
    .sass('app/Assets/css/page1.scss', 'css/').version().sourceMaps()
    .setPublicPath('public');