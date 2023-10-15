// vite.config.js
import { defineConfig } from "file:///var/www/app/node_modules/vite/dist/node/index.js";
import laravel from "file:///var/www/app/node_modules/laravel-vite-plugin/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: ["resources/sass/app.scss", "resources/js/app.js"],
      refresh: true
    })
  ],
  server: {
    host: true,
    hmr: {
      host: "localhost"
    },
    watch: {
      usePolling: true
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvdmFyL3d3dy9hcHBcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIi92YXIvd3d3L2FwcC92aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vdmFyL3d3dy9hcHAvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuXG5jb25zdCBob3N0ID0gJ3V0aC5sb2NhbCc7IFxuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogWydyZXNvdXJjZXMvc2Fzcy9hcHAuc2NzcycsICdyZXNvdXJjZXMvanMvYXBwLmpzJ10sXG4gICAgICAgICAgICByZWZyZXNoOiB0cnVlLFxuICAgICAgICB9KSxcbiAgICBdLFxuICAgIHNlcnZlcjoge1xuICAgICAgICBob3N0OnRydWUsXG4gICAgICAgIGhtcjoge1xuICAgICAgICAgICAgaG9zdDogJ2xvY2FsaG9zdCdcbiAgICAgICAgfSxcbiAgICAgICAgd2F0Y2g6e1xuICAgICAgICAgICAgdXNlUG9sbGluZzp0cnVlLFxuICAgICAgICB9XG4gICAgfSxcbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUFzTixTQUFTLG9CQUFvQjtBQUNuUCxPQUFPLGFBQWE7QUFJcEIsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTyxDQUFDLDJCQUEyQixxQkFBcUI7QUFBQSxNQUN4RCxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsRUFDTDtBQUFBLEVBQ0EsUUFBUTtBQUFBLElBQ0osTUFBSztBQUFBLElBQ0wsS0FBSztBQUFBLE1BQ0QsTUFBTTtBQUFBLElBQ1Y7QUFBQSxJQUNBLE9BQU07QUFBQSxNQUNGLFlBQVc7QUFBQSxJQUNmO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
