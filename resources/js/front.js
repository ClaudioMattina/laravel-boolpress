/* prendiamo vue */
window.Vue = require('vue');
/* prendiamo axios */
window.axios = require('axios');

/* non so cosa prendiamo (a regola dovrebbe essere superfluo) */
window.axios.defaults.headers.common['X-Requested-Whit'] = 'XMLHttpRequest';

import App from './views/App.vue'

const app = new Vue({
    el: '#root',
    render:h => h(App)
});
