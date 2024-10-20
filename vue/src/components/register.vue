<template>
  <div>
    <h4
      class="mb-6 text-center text-md-h4 primary--text"
      style="font-weight: bold"
    >
      create Account
    </h4>
    <v-form @submit.prevent="submit" ref="form" v-model="valid" lazy-validation>
      <v-text-field
        v-model="user.name"
        :rules="[(v) => !!v || 'field Required']"
        label="name"
      >
      </v-text-field>
      <v-text-field
        v-model="user.email"
        label="email"
        :rules="[
          (v) => !!v || 'field Required',
          (v) => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ]"
      ></v-text-field>
      <v-text-field
        v-model="user.password"
        label="password"
        type="password"
        :rules="[(v) => !!v || 'field Required']"
      ></v-text-field>

      <v-card-actions class="d-flex justify-center">
        <v-btn
          large
          color="primary"
          type="submit"
          rounded
          style="width: 50%"
          @click="submit"
        >
          signUp
        </v-btn>
      </v-card-actions>
    </v-form>
    <h6 class="subtitle-1 text-center mt-3">
      already Have Account
      <span>
        <router-link :to="{ name: 'login' }">login </router-link>
      </span>
    </h6>
  </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  data() {
    return {
      user: { name: "", email: null, password: null },
      valid: true,
    };
  },
  methods: {
    ...mapActions("auth", ["register"]),
    submit() {
      this.$refs.form.validate();
      this.register(this.user);
    },
  },
};
</script>