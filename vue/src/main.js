import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from './router'
import * as directives from 'vuetify/directives';
import * as components from 'vuetify/components';
import { createVuetify } from 'vuetify';


const vuetify = createVuetify({
    components,
    directives,
});

createApp(App).use(router).use(vuetify).mount('#app')
