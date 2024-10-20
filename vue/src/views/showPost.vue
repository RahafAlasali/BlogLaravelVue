<template>
  <v-container>
    <v-row class="pt-5">
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
      <v-col cols="3" offset="2">
        <v-card class="mx-auto pa-2" tile>
          <h3 class="py-1 text-center">Categories</h3>
          <v-divider></v-divider>
          <v-list v-for="(category, i) in categories" :key="i" class="py-0">
            <v-list-item>
              <!-- <v-list-item-icon>
                  <v-icon v-text="item.icon"></v-icon>
                </v-list-item-icon> -->
              <v-list-item-content>
                <v-list-item-title>{{ category.name }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from "axios";
import { mapActions, mapState } from "vuex";
export default {
  data() {
    return {
      post: null,
      id: null,
      desc: null,
    };
  },
  computed: {
    ...mapState("core", ["categories"]),
  },
  methods: {
    ...mapActions("core", ["getCategory"]),
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
    // to store
  },
  mounted() {
    this.id = this.$route.params.id;
    this.getPostId();
    this.getCategory();
  },
};
</script>