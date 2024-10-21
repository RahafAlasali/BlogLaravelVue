<template>
  <div>
    <v-card
      class="mx-auto"
      max-width="344"
      @click="$router.push({ name: 'showPost', params: { id: post.id } })"
    >
      <v-img
        src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
        height="200px"
      ></v-img>
      <v-card-title class="primary--text py-2">
        {{ post.category.name }}
      </v-card-title>
      <v-card-title class="pt-0"
        ><h3>{{ post.title }}</h3>
      </v-card-title>
      <!-- <v-card-subtitle>{{ post.created_at }}</v-card-subtitle> -->
    </v-card>
  </div>
</template>

<script>
export default {
  props: ["post"],
};
</script>
