let mix = require('laravel-mix');

// mix.js('src/app.js', 'dist').setPublicPath('dist');
// mix.js('/xampp/htdocs/latihan/latihan/laravel/skripsiy/appstarter/public/js/app.js', '/public/js');
// mix.js('public/js/app.js', '/public/js');
mix.js('public/js/app.js', '/public/js').postCss("public/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);