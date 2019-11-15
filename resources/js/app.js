
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'
Vue.use(Buefy);

Vue.component('user-list', require('./components/Users.vue').default);
Vue.component('company-list', require('./components/Companies.vue').default);
Vue.component('company-create', require('./components/CompanyCreate.vue').default);

// Vue.component('test-1', require('./components/Test1.vue').default);
// Vue.component('test-2', require('./components/Test2.vue').default);
