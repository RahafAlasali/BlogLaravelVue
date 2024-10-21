import axios from "axios";

axios.defaults.baseURL = 'http://localhost:8000/api';

export default {
    namespaced: true,
    state: {
        isLogin: localStorage.getItem("access_token") !== null ? true : false,
        token: localStorage.getItem("access_token") || null,
        posts: [],
        categories: [],

    },
    mutations: {
        setPosts(state, date) {
            state.posts = date
        },
        setCategory(state, date) {
            state.categories = date
        }

    },

    getters: {
        getPosts(state) {
            return state.posts
        }
        ,
        getCategories(state) {
            return state.categories
        }
    },
    actions: {
        async getPosts({ commit }) {
            await axios
                .get("http://localhost:8000/api/post")
                .then((res) => {

                    commit('setPosts', res.data)
                })
                .catch((e) => { });
        },
        async getCategory({ commit }) {
            await axios
                .get("http://localhost:8000/api/category")
                .then((res) => {

                    commit('setCategory', res.data)
                })
                .catch((e) => { });
        },
    }
}


