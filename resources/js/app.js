import Vue from 'vue'
import LinkToolbar from './components/LinkToolbar'
import KeyboardLink from './components/KeyboardLink'
import Keypress from 'vue-keypress'

Vue.component('keypress', Keypress);

var app = new Vue({
    el: '#app',
    components: {
        'link-toolbar': LinkToolbar,
        'keyboard-link': KeyboardLink
    },
})
