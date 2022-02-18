import Vue from "vue";
import store from "~/store";
import router from "~/router";
import i18n from "~/plugins/i18n";
import App from "~/components/App";
import VueCarousel from "vue-carousel";
import VueSweetalert2 from "vue-sweetalert2";
import "animate.css";

import "~/plugins";
import "~/components";

Vue.config.productionTip = false;
Vue.use(VueCarousel);
Vue.use(VueSweetalert2);

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App,
});
