const module = {
    state: {value:0},
    mutations: {
        increment (state:{value:number}) {state.value++;},
        decrement (state:{value:number}) {state.value--;}
    },
    actions: {
        increment({commit}:{commit:Function}) {
            commit('increment')
        }
    }
};

export default module;