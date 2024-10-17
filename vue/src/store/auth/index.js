import axios from "axios";

axios.defaults.baseURL = 'http://localhost:8000/api';

export default {
  namespaced: true,
  state: {
    isLogin: localStorage.getItem("access_token") !== null ? true : false,
    token: localStorage.getItem("access_token") || null
  },
  mutations: {

    destroyToken(state) {
      state.token = null
    },
  },
  getters: {
    loggedIn(state) {
      return state.token !== null
    },
  },
  actions: {
    async login({ commit }, user) {
      axios
        .post("/auth/login", user, {
          headers: {
            "Content-Type": "application/json",
          },
        })
        .then((res) => {
          commit("setLogin", true);
          localStorage.setItem("access_token", res.data.access_token);
        });
    },
    async logout(context) {
      axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token
      axios
        .post("auth/logout")
        .then((res) => {
          localStorage.removeItem('access_token')
          context.commit('destroyToken')
        });
    },
  },
};
