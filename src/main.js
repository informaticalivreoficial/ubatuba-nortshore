import Vue from 'vue'
import Default from './layouts/Default'
import router from './routes'

new Vue({
    render: h => h(Default),
    router
}).$mount('#app')
