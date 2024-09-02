import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import postcss from "postcss";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/main.sass',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        postcss(),
    ],
});
