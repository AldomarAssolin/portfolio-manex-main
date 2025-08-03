import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/css/app.css',
                'resources/js/bootstrap.js',
                'resources/js/dashboard.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
