import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'public/css/app.css',
                'public/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
