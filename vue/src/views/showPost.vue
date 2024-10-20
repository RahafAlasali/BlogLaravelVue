<template>
  <v-container>
    <v-row>
      <v-col cols="7">
        <v-img
          src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
          height="200px"
        ></v-img>
        <div class="my-3">
          <span>{{ post.category.name }}</span>
          <p>
            {{ post.description }}
          </p>
        </div>
        <v-divider> </v-divider>
        <div class="my-2">
          <h3>Comment</h3>
          <div class="my-2">
            <div
              class="d-flex align-center"
              v-for="comment in post.comment"
              :key="comment.id"
            >
              <div class="mx-2 my-2">
                <v-avatar size="50">
                  <img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                    alt="John"
                  />
                </v-avatar>
              </div>
              <div class="px-2">
                {{ comment.description }}
              </div>
            </div>
          </div>

          <v-textarea label="comment" solo v-model="desc" rows="4"></v-textarea>
          <v-btn color="primary" @click="submit">Submit</v-btn>
        </div>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      post: null,
      id: null,
      desc: null,
    };
  },
  methods: {
    async getPostId() {
      await axios
        .get(`http://localhost:8000/api/post/${this.id}`)
        .then((res) => {
          this.post = res.data.data;
        })
        .catch((e) => {});
    },
    submit() {
      axios
        .post(
          `http://localhost:8000/api/post/${this.id}/comment`,
          { description: this.desc },
          {
            headers: {
              "Content-Type": "application/json",
            },
          }
        )
        .then((res) => {})
        .catch();
    },
  },
  mounted() {
    this.id = this.$route.params.id;
    this.getPostId();
  },
};
</script>