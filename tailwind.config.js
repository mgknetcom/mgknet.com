/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./layouts/**/*.php",
    "./sections/**/*.php",
    "./includes/**/*.php",
    "./config/**/*.php",
    "./*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#DDE3FD",
          100: "#CBD4FC",
          200: "#A7B7FA",
          300: "#8399F8",
          400: "#5F7CF6",
          500: "#3B5EF4",
          600: "#0C34F0",
          700: "#0A2BC4",
          800: "#082298",
          900: "#06196C",
        },
      },
      fontFamily: {
        sans: ["Poppins", "ui-sans-serif", "system-ui"],
      },
    },
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
