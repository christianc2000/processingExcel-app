import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            publicDir: 'public/build', // Ruta al directorio público de Laravel donde se colocarán los activos compilados
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap':path.resolve(__dirname,'node_modules/bootstrap'),
            vue: 'vue/dist/vue.esm-bundler.js',
        }
    },
});
