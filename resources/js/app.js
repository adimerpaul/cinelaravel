require('./bootstrap');
import Vue from 'vue';
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
import Example from './components/ExampleComponent';
const app = new Vue({
    el: '#app',
    components: { Example }
});
