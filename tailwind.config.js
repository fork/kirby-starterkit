/** @type {import('tailwindcss').Config} */
export default {
  content: ["./site/**/*.php"],
  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px"
    },
    spacing: {
      xxs: "4px",
      xs: "6px",
      s: "12px",
      m: "24px",
      l: "36px",
      xl: "48px",
      xxl: "72px",
      xxxl: "120px"
    },
    fontSize: {
      "headline-1": ["24px", "24px"],
      "headline-1-lg": ["54px", "54px"],

      "headline-2": ["20px", "22px"],
      "headline-2-lg": ["36px", "40px"],

      "headline-3": ["17px", "21px"],
      "headline-3-lg": ["24px", "32px"],

      copy: ["14px", "21px"],
      "copy-lg": ["16px", "24px"],

      "copy-small": ["12px", "18px"],
      "copy-small-lg": ["16px", "24px"]
    },
    colors: {
      primary: {
        50: "#000000",
        70: "#4E4E4E",
        90: "#747474"
      },
      neutral: {
        30: "#EEEEEE",
        50: "#888888",
        70: "#4D4D4D",
        90: "#000000"
      },

      interaction: {
        50: "#6795FF"
      },
      notification: {
        50: "#EFFB5A"
      },
      success: {
        50: "#52E3A9"
      },
      warning: {
        50: "#FF6E5F"
      },

      black: "#000",
      white: "#fff"
    },
    maxWidth: {
      default: "1440px",
      content: "750px"
    },
    extend: {}
  },
  corePlugins: {
    aspectRatio: false
  },
  plugins: [require("@tailwindcss/aspect-ratio")]
};
