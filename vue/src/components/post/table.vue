<template>
  <div>
    <v-data-table
      :headers="headers"
      :items="products"
      :page.sync="page"
      :items-per-page="itemsPerPage"
      hide-default-footer
      :loading="loading"
      class="elevation-3"
      @page-count="pageCount = $event"
      :search="search"
    >
      <template v-slot:top>
        <div class="d-flex justify-space-between align-center pa-4">
          <div>
            <v-text-field
              prepend-inner-icon="mdi-magnify"
              label="Search"
              single-line
              hide-details
            ></v-text-field>
          </div>
          <div>
            <v-btn color="primary" dark class="mb-2 pa-2"> Add </v-btn>
          </div>
        </div>
      </template>
    </v-data-table>
    <div class="text-center pt-2">
      <v-pagination
        v-model="page"
        total-visible
        :length="pageCount"
      ></v-pagination>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      headers: [
        { text: "id", value: "id", align: "center" },
        { text: "Title", value: "title", align: "center", width: "500px" },
        { text: "Description", value: "description", align: "center" },
      ],
      data: [],
      search: null,
      loading: false,
      page: 1,
      pageCount: 0,
      itemsPerPage: 8,
    };
  },
  computed: {
    products() {
      return this.data;
    },
  },
  methods: {
    async getProducts() {
      await axios
        .get("http://localhost:8000/api/post")
        .then((res) => {
          this.data = res.data.data;
        })
        .catch((e) => {});
    },
  },
  mounted() {
    this.getProducts();
  },
};
</script>
