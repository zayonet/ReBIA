
import { Form, HasError, AlertError } from 'vform';//Setting vForm

import Swal from 'sweetalert2'; //Settings SweerAlert


import VueRouter from 'vue-router';

import routes from './routes'; //Setting routes


Vue.use(VueRouter)

const router = new VueRouter({
    //mode: 'history',
    routes // short for `routes: routes`
})

//vForm
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);


//SweetAlert
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
window.Toast = Toast;



Vue.component(
    'NotFound',
    require('./pages/404.vue').default
);



new Vue({
    router,
}).$mount('#app');
 