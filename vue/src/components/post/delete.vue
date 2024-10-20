<template>
  <div>
    <v-dialog
      v-model="$props.showDialog"
      max-width="500px"
      hide-overlay
      persistent
    >
      <v-card>
        <v-card-title class="text-h5"
          >Are you sure you want to delete this item?</v-card-title
        >
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="cancel">Cancel</v-btn>
          <v-btn color="blue darken-1" text @click="deletefunc">OK</v-btn>
          <v-spacer></v-spacer>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
  
<script>
import axios from "axios";
export default {
  props: ["showDialog", "item"],
  emits: ["colseDialog"],
  data() {
    return {
      loading: false,
    };
  },
  methods: {
    cancel() {
      this.$emit("colseDialog");
    },

    async deleteItem() {
      await axios
        .delete(`http://localhost:8000/api/post/${this.$props.item.id}`)
        .then((res) => {})
        .catch((e) => {});
    },
    deletefunc() {
      this.loading = true;
      this.deleteItem();
      this.$emit("colseDialog");
      this.loading = false;
    },
  },
};
</script>
  