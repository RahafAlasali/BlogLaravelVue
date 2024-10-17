<template>
  <div>
    <v-row class="align-center" style="height: 100vh">
      <v-col cols="10" md="4" class="offset-md-2 mx-auto">
        <div class="pa-4">
          <v-container>
            <Register />
          </v-container>
        </div>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import Register from "../components/register.vue";
export default {
  components: {
    Register,
  },
};
</script>
