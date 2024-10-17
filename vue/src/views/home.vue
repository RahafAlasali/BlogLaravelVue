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
            <v-card class="mx-auto" max-width="344">
              <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="200px"
              ></v-img>
              <v-card-title class="primary--text py-0">
                {{ post.category.name }}</v-card-title
              >
              <v-card-title class="pt-0"> {{ post.title }} </v-card-title>
              <v-card-subtitle>{{ post.description }}</v-card-subtitle>
            </v-card>
          </v-col>
        </v-row>
      </div>
    </v-container>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      posts: [],
      categories: [],
    };
  },

  methods: {
    async getCategory() {
      await axios
        .get("http://localhost:8000/api/category")
        .then((res) => {
          this.categories = res.data;
        })
        .catch((e) => {});
    },
    async getProducts() {
      await axios
        .get("http://localhost:8000/api/post")
        .then((res) => {
          this.posts = res.data.data;
        })
        .catch((e) => {});
    },
  },
  mounted() {
    this.getProducts();
    this.getCategory();
  },
};
</script>