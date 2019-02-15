import Vue from 'vue';
import Vuex from 'vuex';

import count from './modules/count';
import todos from './modules/todos';

Vue.use(Vuex);

const store:any = new Vuex.Store({
    modules: {
        count,
        todos
    }
});

export default store;