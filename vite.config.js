import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


const headers = new Headers();
let auth = headers.get('Authorization');


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/js/dictaphone.js',
                'resources/js/bootstrap.js',
                'resources/js/echo.js'
            ],
            refresh: true,
        }),
    ],
    server:{
        headers: {
            Authorization: auth
        }
    }
});
