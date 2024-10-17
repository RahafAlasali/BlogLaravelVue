<template>
  <div>
    <div>
      <div
        class="mb-6 text-center text-md-h4 primary--text"
        style="font-weight: bold"
      >
        login
      </div>
      <v-form
        @submit.prevent="submit"
        ref="form"
        v-model="valid"
        lazy-validation
      >
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
          :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
          label="password"
          :type="show2 ? 'text' : 'password'"
          :rules="[(v) => !!v || 'field Required']"
          @click:append="show2 = !show2"
        ></v-text-field>

        <div class="d-flex justify-center mt-6">
          <v-btn
            large
            type="submit"
            color="primary"
            rounded
            style="width: 50%"
            @click="submit"
          >
            login
          </v-btn>
        </div>
      </v-form>
      <h6 class="subtitle-1 text-center mt-3">
        Do not have an account?
        <span>
          <router-link :to="{ name: 'register' }"> register</router-link>
        </span>
      </h6>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  data() {
    return {
      valid: true,
      show2: false,
      user: {},
    };
  },
  methods: {
    ...mapActions("auth", ["login"]),
    submit() {
      // this.$refs.form.validate();
      this.login(this.user);
      this.$router.push({ name: "home" });
    },
  },
};
</script>



