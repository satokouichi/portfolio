import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import basicSsl from '@vitejs/plugin-basic-ssl';

const path = require('path')
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/admin/app.scss',
                'resources/sass/web/app.scss',
                'resources/js/web/app.js',
            ],
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
        basicSsl(),
    ],
    root: path.resolve(__dirname, ''),
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    },
    server: {
        host: true,
        hmr: {
            host: 'localhost'
        },
        watch: {
            usePolling: true,
        },
    },
    optimizeDeps: {
        exclude: ['vue/dist/vue.esm-bundler.js']
    },
    define: {
        __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: false
    }
});
