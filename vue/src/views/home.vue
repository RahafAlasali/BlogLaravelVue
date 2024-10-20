<template>
  <div>
    <v-container>
      <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae
        voluptatem asperiores molestiae alias accusamus qui maiores, veritatis
        debitis ut magni dicta, eos laboriosam harum temporibus? Magnam,
        aspernatur. Odio, voluptates quasi.
      </div>
      <div class="d-flex justify-center my-3">
        <v-list v-for="category in categories" :key="category.id">
          <v-btn color="primary" class="mx-1">
            {{ category.name }}
          </v-btn>
        </v-list>
      </div>
      <div>
        <v-row>
          <v-col cols="4" v-for="post in posts" :key="post.id">
            <Post
              :id="post.id"
              :title="post.title"
              :category="post.category.name"
              :description="post.description"
            ></Post>
          </v-col>
        </v-row>
      </div>
    </v-container>
  </div>
</template>
<script>
import Post from "@/components/post.vue";
import { mapActions, mapState } from "vuex";

export default {
  components: {
    Post,
  },
  data() {
    return {};
  },

  computed: {
    ...mapState("core", ["posts", "categories"]),
  },
  methods: {
    ...mapActions("core", ["getPosts", "getCategory"]),
  },
  mounted() {
    this.getPosts();
    this.getCategory();
  },
};
</script>