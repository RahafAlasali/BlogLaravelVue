<template>
  <div>
    <v-dialog
      v-model="$props.showDialog"
      max-width="500px"
      hide-overlay
      persistent
    >
      <v-card>
        <v-card-title>
          <span class="text-h5">Create Post</span>
        </v-card-title>

        <v-card-text>
          <v-container>
            <v-form
              @submit.prevent="save"
              ref="form"
              v-model="valid"
              lazy-validation
            >
              <v-row>
                <v-col class="py-0" cols="12" sm="6" md="12">
                  <v-text-field
                    dense
                    label="Title"
                    v-model="post.title"
                    :rules="[(v) => !!v || 'fieldRequired']"
                    outlined
                  ></v-text-field>
                </v-col>
                <v-col class="py-0" cols="12" sm="6" md="12">
                  <v-text-field
                    dense
                    label="description"
                    v-model="post.description"
                    :rules="[(v) => !!v || 'fieldRequired']"
                    outlined
                  ></v-text-field>
                </v-col>
              </v-row>
            </v-form>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="cancel"> Cancel </v-btn>
          <v-btn
            type="submit"
            color="blue darken-1"
            :loading="loading"
            text
            @click="save"
          >
            Save
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["showDialog"],
  emits: ["colseDialogCreate"],
  data() {
    return {
      post: {
        title: null,
        description: null,
      },
      valid: true,
      loading: false,
    };
  },

  methods: {
    addPost(post) {
      axios
        .post("http://localhost:8000/api/post", post, {
          headers: {
            "Content-Type": "application/json",
          },
        })
        .then((res) => {
          debugger;
          this.res.data;
        });
    },

    cancel() {
      this.$emit("colseDialogCreate");
      this.$refs.form.reset();
    },
    save() {
      const validForm = this.$refs.form.validate();
      if (validForm) {
        this.loading = true;
        this.addPost(this.post);
        this.$emit("colseDialogCreate");
        this.loading = false;
        this.$refs.form.reset();
      }
    },
  },
};
</script>