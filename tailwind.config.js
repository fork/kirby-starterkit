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
      0: "0px",
      xxxs: "3px",
      xxs: "6px",
      xs: "12px",
      s: "18px",
      m: "24px",
      l: "36px",
      xl: "48px",
      xxl: "72px",
      xxxl: "120px"
    },
    fontSize: {
      "headline-1": ["32px", "32px"],
      "headline-1-md": ["45px", "54px"],

      "headline-2": ["24px", "28px"],
      "headline-2-md": ["35px", "42px"],

      "headline-3": ["20px", "24px"],
      "headline-3-md": ["24px", "36px"],

      copy: ["14px", "21px"],
      "copy-md": ["16px", "24px"],

      "copy-small": ["12px", "18px"],
      "copy-small-md": ["16px", "24px"]
    },
    colors: {
      primary: {
        50: "#000000",
        70: "#4E4E4E",
        90: "#747474"
      },
      neutral: {
        10: "#ffffff",
        30: "#EEEEEE",
        50: "#888888",
        70: "#4D4D4D",
        90: "#000000"
      },

      interaction: {
        50: "#FF9900"
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
      default: "1200px",
      full: "1920px"
    },
    extend: {}
  }
};
