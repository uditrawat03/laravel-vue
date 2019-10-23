
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'
Vue.use(Buefy);

Vue.component('user-list', require('./components/Users.vue').default);
Vue.component('company-list', require('./components/Companies.vue').default);

