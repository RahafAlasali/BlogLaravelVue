import { defineConfig } from 'vite';
import { createVuePlugin } from 'vite-plugin-vue2';
// import VuetifyLoaderPlugin from 'vuetify-loader/lib/plugin';
export default defineConfig({
  plugins: [createVuePlugin()
    // , new VuetifyLoaderPlugin()
  ],

  build: {
    transpile: ['vuetify'],
  }
});
