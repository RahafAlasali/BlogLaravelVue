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
              v-model="search"
              prepend-inner-icon="mdi-magnify"
              label="Search"
              single-line
              hide-details
            ></v-text-field>
          </div>
          <div>
            <v-btn
              color="primary"
              dark
              class="mb-2 pa-2"
              @click="dialogCreate = true"
            >
              Add
            </v-btn>
          </div>
        </div>
      </template>

      <template v-slot:item.actions="{ item }">
        <v-icon small class="mr-2" @click="editItem(item)"> mdi-pencil </v-icon>
        <v-icon small @click="deleteItem(item)"> mdi-delete </v-icon>
      </template>
    </v-data-table>
    <div class="text-center pt-2">
      <v-pagination
        v-model="page"
        total-visible
        :length="pageCount"
      ></v-pagination>
    </div>
    <create-post
      :showDialog="dialogCreate"
      @colseDialogCreate="dialogCreate = false"
    />
    <delete-post
      :item="deletePost"
      :showDialog="dialogDelete"
      @colseDialog="dialogDelete = false"
    />
    <edit-post
      :item="editPost"
      :showDialog="showDialog"
      @colseDialog="showDialog = false"
    />
  </div>
</template>

<script>
import axios from "axios";
import CreatePost from "./create.vue";
import DeletePost from "./delete.vue";
import EditPost from "./edit.vue";
export default {
  components: {
    CreatePost,
    DeletePost,
    EditPost,
  },
  data() {
    return {
      deletePost: null,
      editPost: null,
      dialogCreate: false,
      dialogDelete: false,
      showDialog: false,
      headers: [
        { text: "id", value: "id", align: "center" },
        { text: "Title", value: "title", align: "center" },
        { text: "Description", value: "description", align: "center" },
        { text: "Actions", value: "actions", sortable: false },
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
    deleteItem(item) {
      this.deletePost = item;
      this.dialogDelete = true;
    },
    editItem(item) {
      this.editPost = item;
      this.showDialog = true;
    },
  },
  mounted() {
    this.getProducts();
  },
};
</script>
