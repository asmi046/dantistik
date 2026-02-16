import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler'
import CookiesWarning from "./components/CookiesWarning.vue"
import ModalWindow from "./components/ModalWindow.vue"
import EmptyModal from "./components/EmptyModal.vue"
import { VMaskDirective } from 'v-slim-mask'

import axios from 'axios'
import VueAxios from 'vue-axios'

const global_app = createApp({
    components: {
        CookiesWarning,
        ModalWindow,
        EmptyModal,
    },
    setup() { }
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#modal_app");

document.addEventListener("DOMContentLoaded", (event) => {
    new isvek.Bvi();
});
