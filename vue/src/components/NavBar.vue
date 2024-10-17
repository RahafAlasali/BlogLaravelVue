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
          <router-link class="mx-1" to="">
            <v-btn icon small>
              <v-icon> mdi-account</v-icon>
            </v-btn></router-link
          >
          <v-menu
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
        </div>
      </v-toolbar>
    </div>
  </div>
</template>

<script>
import { mapMutations, mapActions } from "vuex";
export default {
  data() {
    return {
      drawer: true,
      links: [
        { title: "home", to: "/" },
        { title: "contact", to: "" },
        { title: "about", to: "" },
      ],
    };
  },
  methods: {
    ...mapActions("auth", ["logout"]),
    submit() {
      this.logout();
      // this.$router.push("/");
    },
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
