const mix = require('laravel-mix');

const ImageminPlugin = require('imagemin-webpack-plugin').default
const CopyPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');

mix.webpackConfig({

    plugins: [
        new CopyPlugin({
            patterns: [
                { from: "resources/assets/images", to: "assets/images" },
                { from: "resources/assets/fonts", to: "assets/fonts" },
            ],
        }),

        new ImageminPlugin({
            disable: process.env.NODE_ENV !== 'production', // Disable during development
            imageminMozjpeg: {
                quality: '80'
            }
        })
    ],
});

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

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sass('resources/assets/sass/index.scss',  'public/css/op.css')
    .sass('resources/assets/rtl.scss',  'public/css/op.css')



    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}



mix.scripts([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/plugins.min.js',
    'resources/assets/js/main-scripts.js',
], 'public/js/op.js');
