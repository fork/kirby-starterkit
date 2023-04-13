import { resolve } from "path";
import kirby from "vite-plugin-kirby";

const cwd = process.cwd();

const input = Object.fromEntries([
  ["main", "src/main.ts"],
]);

export default ({ mode }) => ({
  root: "src",
  base: mode === "development" ? "/" : "/assets/dist/",

  resolve: {
    alias: [{ find: "@", replacement: resolve(cwd, "src") }]
  },

  build: {
    outDir: resolve(cwd, "public/assets/dist"),
    emptyOutDir: true,
    rollupOptions: { input }
  },

  plugins: [kirby()]
});
