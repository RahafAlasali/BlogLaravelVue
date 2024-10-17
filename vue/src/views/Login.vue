<template>
  <div>
    <v-row class="align-center" style="height: 100vh">
      <v-col cols="6" md="4" class="offset-md-2 px-9 mx-auto">
        <v-container>
          <Login />
        </v-container>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import Login from "../components/login.vue";

export default {
  components: {
    Login,
  },
};
</script>

