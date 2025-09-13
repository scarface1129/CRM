import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(), // 👈 enable Vue 3 support
    ],
    resolve: {
        alias: {
            '@': '/resources/js', // 👈 lets you use @ for imports
        },
    },

    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['vue', 'axios'], // put heavy deps here
                },
            },
        },
    },
});
