const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.ts('modules/Accueil/Accueil/AccueilObjectScript.ts', 'public/js');
mix.ts('modules/Article/Article/ArticleObjectScript.ts', 'public/js');
mix.ts('modules/Entite/Entite/EntiteObjectScript.ts', 'public/js');

mix.sass('resources/scss/app.scss', 'public/css')
.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
])