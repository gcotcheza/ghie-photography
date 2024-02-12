// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import vue from '@vitejs/plugin-vue';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/sass/app.scss', 'resources/js/app.js'],
//             refresh: true,
//         }),
//          vue(),
//     ],
// });

import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                // Enable runtime compilation
                compilerOptions: {
                    isCustomElement: tag => tag.startsWith('ion-')
                }
            }
        }),
    ],
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js', // Alias for runtime + compiler
        },
    },
});

