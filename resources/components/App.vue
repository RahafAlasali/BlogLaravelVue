<template>
  <div>
    <v-container>
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
      <v-card title="Card title" text="...">
        <v-chip class="ma-2" color="primary" variant="outlined">
          User Account
          <v-icon icon="mdi-account-outline" end></v-icon>
        </v-chip>
      </v-card>
      <router-view />
    </v-container>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      data: "From vue app fgjgjhgjhgj:Ln,vndkvdk",
    };
  },
};
</script>
