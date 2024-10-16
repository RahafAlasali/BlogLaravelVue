// import './style.css'
import 'vuetify/dist/vuetify.min.css'; // Import Vuetify CSS
import router from './router';
import Vue from 'vue';
import App from './App.vue';
import '@mdi/font/css/materialdesignicons.css';
// import 'vuetify/src/styles/main.sass'; // Or .scss depending on your setup
import Vuetify, {
    VBtn, VContainer, VApp, VList, VListItem, VListItemIcon, VListItemTitle, VIcon, VDivider, VMain, VListItemContent
    , VCol, VRow, VSpacer, VTextField, VBadge, VMenu, VAvatar, VDataTable, VPagination
} from 'vuetify/lib';

Vue.config.productionTip = false;

Vue.use(Vuetify, {
    components: {
        VBtn, VContainer, VApp, VList, VListItem, VListItemIcon, VListItemTitle, VIcon, VDivider, VListItemContent,
        VCol, VRow, VMain, VSpacer, VTextField, VBadge, VMenu, VAvatar, VDataTable, VPagination
    },
});

const vuetify = new Vuetify({
    theme: {
        themes: {
            light: {
                primary: "#05453e",
                secondary: '#f4631b'
            },
        },
    },
});
new Vue({
    vuetify,
    router,
    render: h => h(App),
}).$mount('#app')