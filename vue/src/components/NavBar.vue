<template>
  <div>
    <div>
      <v-toolbar
        dark
        class="px-sm-4 primary--text text-uppercase"
        style="background: transparent"
      >
        <v-app-bar-nav-icon class="d-block d-md-none"></v-app-bar-nav-icon>
        <v-toolbar-title class="text-h5">
          <router-link
            to="/"
            class="primary--text"
            style="
              text-decoration: none;
              font-family: cursive;
              font-size: large;
            "
          >
            Blog
          </router-link>
        </v-toolbar-title>

        <v-spacer></v-spacer>
        <v-list class="d-md-flex d-none">
          <v-list-item
            v-for="link in links"
            :ripple="false"
            link
            :to="link.to"
            :key="link.title"
            class="primary--text"
          >
            <v-list-item-content
              ><v-list-item-title>
                {{ link.title }}
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
        <v-spacer></v-spacer>

        <div class="mx-1">
          <router-link class="mx-1" :to="{ name: 'login' }" v-if="!token">
            <v-btn icon small>
              <v-icon class="primary--text"> mdi-account</v-icon>
            </v-btn></router-link
          >
          <v-menu
            v-else
            open-on-hover
            bottom
            offset-y
            origin="top center"
            transition="scale-transition"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn icon v-on="on" v-bind="attrs">
                <v-avatar size="40">
                  <img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                    alt="John"
                  />
                </v-avatar>
              </v-btn>
            </template>

            <v-list>
              <v-list-item link>
                <v-list-item-title @click="$router.push({ name: 'dashboard' })"
                  >dashboard</v-list-item-title
                >
              </v-list-item>
              <v-divider></v-divider>
              <v-list-item link>
                <v-list-item-title @click="submit">
                  <v-btn
                    class="mt-1 rounded-pill"
                    small
                    outlined
                    color="primary "
                  >
                    logout
                  </v-btn>
                </v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
          <v-menu
            open-on-hover
            bottom
            offset-y
            origin="top center"
            transition="scale-transition"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn icon v-on="on" v-bind="attrs">
                <v-icon class="primary--text">mdi-bell-outline</v-icon>
              </v-btn>
            </template>

            <v-list v-for="notification in notifications" :key="notification">
              <v-list-item
                link
                @click="$router.push(`${notification.data.URL}`)"
              >
                <v-list-item-title class="py-0">{{
                  notification.data.body
                }}</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
        </div>
      </v-toolbar>
    </div>
  </div>
</template>

<script>
import { mapActions, mapState } from "vuex";
import axios from "axios";
export default {
  data() {
    return {
      drawer: true,
      links: [
        { title: "home", to: "/" },
        { title: "contact", to: "" },
        { title: "about", to: "" },
      ],
      notifications: [],
    };
  },
  computed: {
    ...mapState("auth", ["token"]),
  },
  methods: {
    ...mapActions("auth", ["logout"]),
    submit() {
      this.logout();
      // this.$router.push("/");
    },
    async getNotification() {
      // debugger;
      axios.defaults.headers.common["Authorization"] =
        "Bearer " + localStorage.getItem("access_token");
      await axios
        .get(`http://localhost:8000/api/notifiction`)
        .then((res) => {
          this.notifications = res.data.data;
        })
        .catch((e) => {});
    },
  },
  mounted() {
    this.getNotification();
  },
};
</script>

<style scoped>
.v-list .theme--light.v-sheet {
  background-color: transparent;
}

.theme--dark.v-list {
  background-color: transparent;
}
</style>
