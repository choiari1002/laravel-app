mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.sass', 'public/css')
    .postCss('resources/css/main.css', 'public/css', [require('tailwindcss'),
]);