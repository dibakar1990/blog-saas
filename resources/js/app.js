import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import '../assets/lib/slick/slick.css';
import '../assets/lib/slick/slick-theme.css';
import '../assets/css/style.css';
import '../assets/lib/easing/easing.min.js';
import '../assets/lib/slick/slick.min.js';
import '../assets/js/main.js';

createInertiaApp({
    resolve: name =>
        resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});