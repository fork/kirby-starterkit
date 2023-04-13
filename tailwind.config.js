/** @type {import('tailwindcss').Config} */
export default {
  content: ["./site/**/*.php"],
  theme: {
    spacing: {
      s: "8px",
      m: "12px",
      l: "16px",
      xl: "24px"
    },
    colors: {
      blue: "#1fb6ff",
      purple: "#7e5bef",
      pink: "#ff49db",
      orange: "#ff7849",
      green: "#13ce66",
      yellow: "#ffc82c",
      "gray-dark": "#273444",
      gray: "#8492a6",
      "gray-light": "#d3dce6"
    },
    extend: {}
  },
  corePlugins: {
    aspectRatio: false
  },
  plugins: [require("@tailwindcss/aspect-ratio")]
};
