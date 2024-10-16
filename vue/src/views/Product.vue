<template>
  <div class="my-3">
    <div class="text-h4 mb-2 primary--text" style="font-weight: bold">
      Products
    </div>

    <data-table />
  </div>
</template>

<script>
import DataTable from "../components/post/table.vue";

export default {
  name: "products",
  components: {
    DataTable,
  },
};
</script>
