<template>
  <div>
    <v-dialog persistent v-model="showDialog" max-width="500px" hide-overlay>
      <v-card>
        <v-card-title>
          <span class="text-h5">Edit Post</span>
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
                  <v-textarea
                    outlined
                    label="Descriptiona"
                    v-model="post.description"
                    :rules="[(v) => !!v || 'fieldRequired']"
                  ></v-textarea>
                </v-col>
              </v-row>
            </v-form>
          </v-container>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="closeDialog">
            Cancel
          </v-btn>
          <v-btn color="blue darken-1" text @click="save"> Save </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
  
<script>
import axios from "axios";
export default {
  name: "product-edit",
  props: {
    item: { typeof: Object },
    showDialog: { type: Boolean, required: true },
  },
  emits: ["colseDialog", "item"],
  data() {
    return {
      loading: false,
      valid: true,
      //   post: { title: null },
    };
  },

  computed: {
    post() {
      return this.$props.item;
    },
  },
  methods: {
    closeDialog() {
      this.$emit("colseDialog");
    },
    async editProduct(editPost) {
      await axios
        .put(`http://localhost:8000/api/post/${this.item.id}`, editPost, {
          headers: {
            "Content-Type": "application/json",
          },
        })
        .then((res) => {})
        .catch();
    },
    save() {
      const validForm = this.$refs.form.validate();
      if (validForm) {
        this.loading = true;
        const editPost = {
          title: this.post.title,
          description: this.post.description,
        };
        this.editProduct(editPost);
        this.$emit("colseDialog");
        this.loading = false;
      }
    },
  },
};
</script>
  