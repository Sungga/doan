import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    // server: {
    //     host: '0.0.0.0', // Cho phép truy cập từ bên ngoài
    //     port: 5173, // Cổng Vite
    //     hmr: {
    //         protocol: 'ws', // Đảm bảo WebSocket hoạt động
    //     }
    // },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
