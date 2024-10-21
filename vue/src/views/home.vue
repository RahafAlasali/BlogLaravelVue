<template>
  <div>
    <v-container>
      <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae
        voluptatem asperiores molestiae alias accusamus qui maiores, veritatis
        debitis ut magni dicta, eos laboriosam harum temporibus? Magnam,
        aspernatur. Odio, voluptates quasi.
      </div>
      <div class="d-flex justify-center align-center my-3">
        <v-btn color="primary" class="mx-1" @click="getPosts()"> All </v-btn>
        <v-list v-for="category in categories" :key="category.id">
          <v-btn color="primary" class="mx-1" @click="getPosts(category.id)">
            {{ category.name }}
          </v-btn>
        </v-list>
      </div>
      <div>
        <v-row>
          <v-col cols="4" v-for="post in posts" :key="post.id">
            <Post :post="post"></Post>
          </v-col>
        </v-row>
      </div>
      <div class="text-center my-3">
        <v-pagination
          v-model="page"
          :length="totalPages"
          circle
          @input="getPosts"
        ></v-pagination>
      </div>

      <div class="my-5 pt-5 text-center">
        <h1>Subscribe Newsletter</h1>

        <p class="py-3">
          Subscribe my Newsletter for new blog posts , tips and info.
        </p>
        <v-row class="justify-center align-center py-2">
          <v-col cols="6">
            <v-text-field solo label="Email" hide-details></v-text-field
          ></v-col>
          <v-btn color=" primary" large>Subscribe </v-btn>
        </v-row>
      </div>
    </v-container>
  </div>
</template>
<script>
import Post from "@/components/post.vue";
import { mapActions, mapState } from "vuex";
import axios from "axios";
export default {
  components: {
    Post,
  },
  data() {
    return {
      page: 1,
      itemsPerPage: 6,
      posts: [],
    };
  },

  computed: {
    ...mapState("core", ["categories"]),
    // postsFilter() {
    //   return this.filter != "all"
    //     ? this.posts.data.filter((item) => item.category.name == this.filter)
    //     : this.posts;
    // },
    // paginatedPosts() {
    //   const start = (this.page - 1) * this.itemsPerPage;
    //   return this.posts.data.slice(start, start + this.itemsPerPage);
    // },
    totalPages() {
      return 5;
    },
  },
  methods: {
    ...mapActions("core", ["getCategory"]),
    async getPosts(filter = "") {
      await axios
        .get(
          `http://localhost:8000/api/post?page=${this.page}&per_page=${this.itemsPerPage}&category=${filter}`
        )
        .then((res) => {
          this.posts = res.data.data;
        })
        .catch((e) => {});
    },
  },
  mounted() {
    this.getPosts();
    this.getCategory();
  },
};
</script>