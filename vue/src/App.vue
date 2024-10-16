<script >
// import axios from "axios";
// axios
//   .get("https://fakestoreapi.com/products")
//   .then((res) => {
//     commit("setProducts", res.data);
//   })
//   .catch((e) => {});
</script>

<template>
  <div>
    <h1 class="text-3xl font-bold underline">Hello world!</h1>
    <!-- <router-link :to="{ name: 'home' }">Home</router-link>
    <router-link :to="{ name: 'about' }">About</router-link> -->
    <v-app>
      <v-container>
        <v-btn color="primary">Hello Vuetify!</v-btn>
      </v-container>
    </v-app>
    <!-- <router-view></router-view> -->
  </div>
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
