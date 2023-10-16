import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import livewire from '@defstudio/vite-livewire-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: false,
        }),
        livewire({ 
            refresh: ['resources/sass/app.scss'],  
        }),
    ],
    server: {
        host:true,
        hmr: {
            host: 'localhost'
        },
        watch:{
            usePolling:true,
        }
    },
});
