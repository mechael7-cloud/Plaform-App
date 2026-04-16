/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.{js,jsx,ts,tsx}",
    "./app/View/Components/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}