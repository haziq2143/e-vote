/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
            'primary' : '#007B7F',
            'secondary': '#00A1A7',
            'accent' : '#B8B8B8',
            'background' : '#E8F4F9',
            'netral' : '#2D2D2D'
          },
      },
    },
    plugins: [],
  }