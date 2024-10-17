<template>
  <div>
    <nav-bar />
    <!-- <v-container> -->

    <router-view />

    <!-- </v-container> -->
    <!-- <v-btn
      class="md-5 mr-3 elevation-21"
      dark
      fab
      button
      bottom
      right
      color="primary"
      fixed
      v-show="showGoToTop"
      @click="top"
      ><v-icon> mdi-chevron-up</v-icon></v-btn
    > -->
    <Footer />
  </div>
</template>
<script>
import NavBar from "../components/NavBar.vue";
import Footer from "../components/footer.vue";
export default {
  components: {
    NavBar,
    Footer,
  },
  data: () => ({
    // offsetTop: 0,
  }),
  computed: {
    // showGoToTop() {
    //   return this.offsetTop > 600;
    // },
  },
  // methods: {
  //   onScroll(event) {
  //     this.offsetTop = event.target.scrollingElement.scrollTop;
  //   },
  //   top() {
  //     window.scrollTo({
  //       top: 0,
  //       left: 0,
  //       behavior: "smooth",
  //     });
  //   },
  // },
};
</script>
