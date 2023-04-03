import { resolve } from "path";
import kirby from "vite-plugin-kirby";

const cwd = process.cwd();

export default ({ mode }) => ({
  root: "src",
  base: mode === "development" ? "/" : "/assets/dist/",

  resolve: {
    alias: [{ find: "@", replacement: resolve(cwd, "src") }]
  },

  build: {
    outDir: resolve(cwd, "public/assets/dist"),
    emptyOutDir: true,
    rollupOptions: { input: resolve(cwd, "src/main.ts") }
  },

  plugins: [kirby()]
});
