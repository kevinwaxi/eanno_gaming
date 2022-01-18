require("./bootstrap");

window.Vue = require("vue").default;

import VueRouter from "vue-router";
import common from "./modules/common";
import router from "./routes/index";
import store from "./store/index";
import Vuesax from "vuesax";

import "vuesax/dist/vuesax.css";

Vue.use(Vuesax);
Vue.mixin(common);

Vue.component("app-layout", require("./components/AppLayout.vue").default);

Vue.use(VueRouter);
const app = new Vue({
    el: "#app",
    router: router,
    store: store,
});
