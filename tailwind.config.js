/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'main': 'rgb(252, 185, 0)',
        'secondary': 'rgb(255, 221, 126)',
        'tertiary': 'rgb(221, 51, 51)',
      },
      backgroundImage: {
        'hero': "url('/public/assets/imagem/Carousel/01.webp')",
        'about': "url('/public/assets/imagem/bg/IMG_0298.webp')",
        'quadrados': "url('/public/assets/imagem/bg/quadrados.webp')",
        'parceria': "url('/public/assets/imagem/bg/bg-parceria.webp')",
        'parrceiros': "url('/public/assets/imagem/bg/bg-parceiros.webp')",
        'figuras': "url('/public/assets/imagem/bg/figuras.webp')"
      },
      backgroundSize: {
        'auto': 'auto',
        'cover': 'cover',
        'contain': 'contain',
        '50%': '50%',
        '16': '4rem',
      }
    },
  },
  plugins: [require("tw-elements/plugin.cjs"), require('flowbite/plugin')],
}

