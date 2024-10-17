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
        v-model="name"
        :rules="[(v) => !!v || 'field Required']"
        label="name"
      >
      </v-text-field>
      <v-text-field
        v-model="email"
        label="email"
        :rules="[
          (v) => !!v || 'field Required',
          (v) => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ]"
      ></v-text-field>
      <v-text-field
        v-model="password"
        label="password"
        type="password"
        :rules="[(v) => !!v || 'field Required']"
      ></v-text-field>

      <v-card-actions class="d-flex justify-center">
        <v-btn large color="primary" type="submit" rounded style="width: 50%">
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
export default {
  data() {
    return {
      name: "",
      email: null,
      password: null,
      valid: true,
    };
  },
  methods: {
    submit() {
      this.$refs.form.validate();
    },
  },
};
</script>