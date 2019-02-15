import Vue from 'vue';
import Vuex from 'vuex';
import store from './app/store';
import TodoList from './app/components/todoList';
Vue.use(Vuex);

new Vue({
    el: '#app',
    template: `
        <div>
            <p>Hello world</p>
            <p>{{count}}</p>
            <div><button @click="increment">increment</button></div>
            <div><button @click="decrement">decrement</button></div>
            <TodoList/>
        </div>
    `,
    components: {
        TodoList
    },
    computed: {
        count () {return store.state.count.value;}
    },
    methods: {
        increment () {store.dispatch('increment')},
        decrement () {store.commit('decrement')}
    }
});