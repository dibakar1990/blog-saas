import { createApp, h } from 'vue';
import { createInertiaApp, Head } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import Toast from 'vue-toastification'
import 'vue-toastification/dist/index.css'
import '../assets/lib/slick/slick.css';
import '../assets/lib/slick/slick-theme.css';
import '../assets/css/style.css';
import '../assets/lib/easing/easing.min.js';
import '../assets/lib/slick/slick.min.js';
import '../assets/js/main.js';

createInertiaApp({
    title: title => `${title}`,
    resolve: name =>
        resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            app.use(plugin)
            app.use(Toast,{
                position: 'top-right',
                timeout: 3000,
                closeOnClick: true,
            })
            app.mount(el);
    },
});