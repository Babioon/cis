var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('vendor/bower_components/bootstrap/less',
        'resources/assets/less/bootstrap')
        .copy('vendor/bower_components/admin-lte/build/less',
        'resources/assets/less/admin-lte')
        .copy('vendor/bower_components/admin-lte/dist/img',
        'public/img')
        .copy('vendor/bower_components/admin-lte/bootstrap/fonts/',
        'public/fonts')

        .scripts(
        [
            'vendor/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js',
            'vendor/bower_components/bootstrap/dist/js/bootstrap.min.js',
            'vendor/bower_components/admin-lte/dist/js/app.js'
        ],
        'public/js/appbase.js', './')

        .browserify('app.js')


        .less('app.less')

        .version(['css/app.css', 'js/appbase.js', 'js/app.js']);
});
