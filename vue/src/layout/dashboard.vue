<template>
  <div>
    <v-row>
      <v-col sm="2">
        <Sidebar />
      </v-col>
      <v-col cols="12" sm="10">
        <v-container>
          <Nav />
          <v-divider class="px-2"></v-divider>
          <v-main>
            <router-view> </router-view>
          </v-main>
        </v-container>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import Sidebar from "../components/sidebar.vue";
import Nav from "../components/Nav.vue";
export default {
  name: "App",
  components: {
    Sidebar,
    Nav,
  },
};
</script>
