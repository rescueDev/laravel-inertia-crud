require("./bootstrap");

// import { InertiaApp } from "@inertiajs/inertia-vue";
// import Vue from "vue";

// Vue.use(InertiaApp);

// const app = document.getElementById("app");

// new Vue({
//     render: h =>
//         h(InertiaApp, {
//             props: {
//                 initialPage: JSON.parse(app.dataset.page),
//                 resolveComponent: name => require(`./Pages/${name}`).default
//             }
//         })
// }).$mount(app);

import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, app, props }) {
        new Vue({
            render: h => h(app, props)
        }).$mount(el);
    }
});
