import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/admin/app.min.css',
                'resources/css/vendor.min.css',
                'resources/css/style.css',
            ],
            refresh: true,
        }),
    ],
});
