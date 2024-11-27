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
        brand: {
          // Primary colors
          primary: {
            50: "#DDE3FD",
            100: "#CBD4FC",
            200: "#A7B7FA",
            300: "#8399F8",
            400: "#5F7CF6",
            500: "#3B5EF4", // Main brand color
            600: "#0C34F0",
            700: "#0A2BC4",
            800: "#082298",
            900: "#06196C",
          },
          // Secondary colors
          secondary: {
            50: "#F8FAFF",
            100: "#E8EFFF",
            200: "#D1DEFF",
            300: "#B9CEFF",
            400: "#A2BDFF",
            500: "#8BACFF", // Secondary brand color
            600: "#749BFF",
            700: "#5C8AFF",
            800: "#4479FF",
            900: "#2D68FF",
          },
          // Accent colors
          accent: {
            50: "#FFF8F3",
            100: "#FFE9D9",
            200: "#FFD4B3",
            300: "#FFBF8C",
            400: "#FFAA66",
            500: "#FF9540", // Accent color
            600: "#FF801A",
            700: "#F27000",
            800: "#CC5F00",
            900: "#A64D00",
          },
          // Gray shades
          gray: {
            50: "#F9FAFB",
            100: "#F3F4F6",
            200: "#E5E7EB",
            300: "#D1D5DB",
            400: "#9CA3AF",
            500: "#6B7280",
            600: "#4B5563",
            700: "#374151",
            800: "#1F2937",
            900: "#111827",
          },
        },
      },
      fontFamily: {
        sans: ["Poppins", "ui-sans-serif", "system-ui"],
      },
      gradients: {
        brand:
          "linear-gradient(to right, var(--tw-colors-brand-primary-500), var(--tw-colors-brand-secondary-500))",
        "brand-hover":
          "linear-gradient(to right, var(--tw-colors-brand-primary-600), var(--tw-colors-brand-secondary-600))",
      },
    },
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
