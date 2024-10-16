<template>
  <div>
    <v-app>
      <router-view></router-view>
    </v-app>
  </div>
</template>
<script >
export default {};
</script>
<style scoped>
.active-item {
  background: #1f625bc7 !important;
}
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
