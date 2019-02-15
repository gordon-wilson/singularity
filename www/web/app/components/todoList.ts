import Vue from 'vue';
import Vuex from 'vuex';
import store from '../store';

Vue.use(Vuex);

const Component = Vue.component('TodoList', {
    template: `
        <ul>
            <li v-for="todo in todos">{{todo.text}}</li>
        </ul>  
    `,
    computed: {
        todos () {return store.state.todos.items;}
    },
    created: function() {
        store.dispatch('todos/getFromApi')
    }
});

export default Component;