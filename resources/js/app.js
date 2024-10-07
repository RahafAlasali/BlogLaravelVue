// import './bootstrap';
import Alpine from 'alpinejs';
import { createApp } from 'vue';
import App from '../components/App.vue';
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

import router from './router';

const vuetify = createVuetify({
    components,
    directives,
})

createApp(App)
    .use(vuetify)
    .use(router)
    .mount('#app');

window.Alpine = Alpine;

Alpine.start();

