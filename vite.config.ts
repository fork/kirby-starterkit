import kirby from 'vite-plugin-kirby'

export default ({ mode }) => ({
  base: mode === 'development' ? '/' : '/assets/dist/',

  build: {
    outDir: "public/assets/dist",
    copyPublicDir: false,
    assetsDir: '',
    rollupOptions: {
      input: ['src/main.ts']
    }
  },

  plugins: [kirby({
    watch: [
      './site/(templates|snippets|controllers|models|layouts)/**/*.php',
      './content/**/*',
    ],
  })],
});
