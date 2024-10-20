// import './style.css'
import Vue from 'vue';
import 'vuetify/dist/vuetify.min.css'; // Import Vuetify CSS
import router from './router';
import store from './store'
import App from './App.vue';
import '@mdi/font/css/materialdesignicons.css';
// import 'vuetify/src/styles/main.sass'; // Or .scss depending on your setup
import Vuetify, {
    VBtn, VContainer, VApp, VList, VListItem, VListItemIcon, VListItemTitle, VIcon, VDivider, VMain, VListItemContent
    , VCol, VRow, VSpacer, VTextField, VBadge, VMenu, VAvatar, VDataTable, VPagination, VSelect, VAppBarNavIcon, VToolbar,
    VToolbarTitle, VCardText, VFooter, VCard, VCardSubtitle, VCardTitle, VImg, VForm, VCardActions, VTextarea, VListItemGroup, VSubheader, VDialog
} from 'vuetify/lib';

Vue.config.productionTip = false;

Vue.use(Vuetify, {
    components: {
        VBtn, VContainer, VApp, VList, VListItem, VListItemIcon, VListItemTitle, VIcon, VDivider, VListItemContent,
        VCol, VRow, VMain, VSpacer, VTextField, VBadge, VMenu, VAvatar, VDataTable, VPagination, VSelect, VToolbar, VAppBarNavIcon,
        VCardText, VFooter, VCard, VToolbarTitle, VCardSubtitle, VCardTitle, VImg, VForm, VCardActions, VTextarea, VListItemGroup, VSubheader, VDialog
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
    store,
    render: h => h(App),
}).$mount('#app')