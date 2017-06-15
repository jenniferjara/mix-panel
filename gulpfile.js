const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');

    mix.scripts([
    	'./node_modules/jquery/dist/jquery.js',
    	'./node_modules/jquery-validation/dist/jquery.validate.js',
    	'./node_modules/jquery-validation/dist/localization/messages_es_PE.js',
    	'main.js'], 
    	'public/js/app.js');
});
