<template>
  <div>
    <div class="d-flex mb-2">
      <div class="text-h5 grey--text">Welcome</div>
      <v-spacer></v-spacer>
      <v-text-field
        solo
        label="Search"
        class="mx-4"
        prepend-inner-icon="mdi-magnify"
        style="max-width: 200px"
        hide-details
        dense
      ></v-text-field>
      <v-btn class="mx-3 button-bell" icon elevation="4"
        ><v-badge overlap content="2" value="2">
          <v-icon> mdi-bell</v-icon>
        </v-badge>
      </v-btn>
      <v-menu open-on-hover bottom offset-y>
        <template v-slot:activator="{ on, attrs }">
          <v-btn icon v-on="on" v-bind="attrs">
            <v-avatar size="40">
              <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John" />
            </v-avatar>
          </v-btn>
        </template>

        <v-list class="text-center" style="letter-spacing: 0.3px">
          <v-list-item link>
            <v-list-item-title>profile</v-list-item-title>
          </v-list-item>
          <v-divider></v-divider>
          <v-list-item link>
            <v-list-item-title>
              <v-btn class="mt-1 rounded-pill" small outlined color="primary ">
                logOut
              </v-btn>
            </v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </div>
  </div>
</template>
<script>
// import { mapMutations } from "vuex";
export default {
  // methods: {
  //   ...mapMutations("auth", ["setLogin"]),
  //   logout() {
  //     console.log("log");
  //     this.setLogin(false);
  //     this.$toast.success("Logout successful!");
  //     localStorage.removeItem("token");
  //     this.$router.push("/");
  //   },
  // },
};
</script>

<style>
.button-bell:hover .v-icon {
  animation: bellRing 2s infinite;
}

@keyframes bellRing {
  0%,
  100% {
    transform-origin: top;
  }

  15% {
    transform: rotateZ(10deg);
  }

  30% {
    transform: rotateZ(-10deg);
  }

  45% {
    transform: rotateZ(5deg);
  }

  60% {
    transform: rotateZ(-5deg);
  }

  75% {
    transform: rotateZ(2deg);
  }
}
</style>