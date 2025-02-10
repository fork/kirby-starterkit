/** @type {import('postcss-load-config').Config} */
const config = {
  plugins: [
    require('@tailwindcss/postcss'),
    require('autoprefixer'),
    require('postcss-pxtorem') // falls benötigt
  ]
};

module.exports = config;
