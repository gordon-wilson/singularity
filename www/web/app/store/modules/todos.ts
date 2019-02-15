import axios from 'axios';
const {apiUrl} = require('../../../env.json');

const module = {
    namespaced:true,
    state: {
        items:[]
    },
    mutations: {
        add: (state:{items:{text:string}[]}, text:string) => {
            state.items.push({text});
        },
        remove: (state:{items:{text:string}[]}, index:number) => {
            state.items.splice(index, 1);
        },
        set:  (state:{items:{text:string}[]}, newState:{text:string}[]) => {
            state.items = newState;
        }
    },
    actions: {
        getFromApi({commit}:{commit:Function}) {
            // axios(
            //     `${apiUrl}/getTodos`,
            //     {
            //         method:'GET',
            //         headers: {
            //             'Access-Control-Allow-Origin': '*',
            //             'Content-Type': 'application/json',
            //         }
            //     }
            // )
            // // .get(`${apiUrl}/getTodos`)
            // .then((response:any) => {
            //     if (response.data.data) {
            //         commit('set', response.data.data);
            //     }
            // })
            // .catch((error:any) => {
            //     console.log('error', error);
            // });

            axios
                .get(`${apiUrl}/getTodos`)
                .then((response:any) => {
                    if (response.data.data) {
                        commit('set', response.data.data);
                    }
                })
                .catch((error:any) => {
                    console.log('error', error);
                });
        }
    }
};

export default module;