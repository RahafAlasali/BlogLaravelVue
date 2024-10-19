<template>
  <div>
    <v-card
      class="mx-auto"
      max-width="344"
      @click="$router.push({ name: 'showPost', params: { id: id } })"
    >
      <v-img
        src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
        height="200px"
      ></v-img>
      <v-card-title class="primary--text py-0"> {{ category }} </v-card-title>
      <v-card-title class="pt-0"> {{ title }} </v-card-title>
      <v-card-subtitle>{{ description }}</v-card-subtitle>
    </v-card>
  </div>
</template>

<script>
export default {
  props: ["id", "title", "category", "description"],
};
</script>
