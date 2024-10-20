import { defineConfig } from 'vite';
import { createVuePlugin } from 'vite-plugin-vue2';
import * as path from 'path';
// import VuetifyLoaderPlugin from 'vuetify-loader/lib/plugin';
export default defineConfig({
  plugins: [createVuePlugin()
    // , new VuetifyLoaderPlugin()
  ],
  resolve: {
    alias: [
      { find: '@', replacement: path.resolve(__dirname, 'src') },
    ],
  },

  build: {
    transpile: ['vuetify'],
  }
});
