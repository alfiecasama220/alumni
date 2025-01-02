import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/scss/app.scss', 
                'resources/js/app.js',
                
                'resources/assets/vendors/mdi/css/materialdesignicons.min.css',
                'resources/assets/vendors/ti-icons/css/themify-icons.css',
                'resources/assets/vendors/css/vendor.bundle.base.css',
                'resources/assets/vendors/font-awesome/css/font-awesome.min.css',
                'resources/assets/vendors/jvectormap/jquery-jvectormap.css',
                'resources/assets/vendors/flag-icon-css/css/flag-icons.min.css',
                'resources/assets/vendors/owl-carousel-2/owl.carousel.min.css',
                'resources/assets/vendors/owl-carousel-2/owl.theme.default.min.css',
                'resources/assets/css/style.css',
                
                
            ],
            refresh: true,
        }),
        
    ],

    build: {
        sourcemap: false, // Disable source maps
    },
    
});


