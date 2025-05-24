import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin-panel.css',
                'resources/js/admin-panel.js',
                'resources/css/admin.css',
                'resources/js/admin.js',
                'resources/css/website.css',
                'resources/js/website.js',
                'resources/css/web.css',
                'resources/js/web.js',  
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
            },
            output: {
                comments: false,
            },
        },
        cssCodeSplit: true,
        rollupOptions: {
          output: {
            manualChunks: undefined,
          },
        },
    },
});
