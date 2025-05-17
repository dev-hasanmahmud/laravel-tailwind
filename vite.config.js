import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin-panel.css',
                'resources/js/admin-panel.js',
                'resources/css/website.css',
                'resources/js/website.js',
                'resources/css/web.css',
                'resources/js/web.js',  
            ],
            refresh: true,
        }),
    ],
});
