// tailwind.config.js

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
     
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        arabic:['Amiri']
      },
    },
  },
  plugins: [],
};
