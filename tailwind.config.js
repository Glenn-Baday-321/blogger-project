/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-img': "url('https://images.pexels.com/photos/4240507/pexels-photo-4240507.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')",
      },
      colors: {
        'background': '#fcf5ef',
        'primary': '#ff7235',
        'secondary': '#6db5ca',
        'tertiary': '#b8d8e0',   
      },
    },
  },
  plugins: [],
}
