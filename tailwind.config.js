/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      height: {
        '5vh'  : '5vh',
        '10vh' : '10vh',
        '15vh' : '15vh',
        '20vh' : '20vh',
        '25vh' : '25vh',
        '30vh' : '30vh',
        '35vh' : '35vh',
        '40vh' : '40vh',
        '45vh' : '45vh',
        '50vh' : '50vh',
        '55vh' : '55vh',
        '60vh' : '60vh',
        '65vh' : '65vh',
        '70vh' : '70vh',
        '75vh' : '75vh',
        '80vh' : '80vh',
        '85vh' : '85vh',
        '90vh' : '90vh',
        '95vh' : '95vh',
      },
      width: {
        '5vh'  : '5vh',
        '10vh' : '10vh',
        '15vh' : '15vh',
        '20vh' : '20vh',
        '25vh' : '25vh',
        '30vh' : '30vh',
        '35vh' : '35vh',
        '40vh' : '40vh',
        '45vh' : '45vh',
        '50vh' : '50vh',
        '55vh' : '55vh',
        '60vh' : '60vh',
        '65vh' : '65vh',
        '70vh' : '70vh',
        '75vh' : '75vh',
        '80vh' : '80vh',
        '85vh' : '85vh',
        '90vh' : '90vh',
        '95vh' : '95vh',
      },
      screens: {
        'tablet': '768px',
        // => @media (min-width: 640px) { ... }
  
        'laptop': '1280px',
        // => @media (min-width: 1024px) { ... }
  
        'desktop': '1920px',
        // => @media (min-width: 1280px) { ... }
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/line-clamp'),
    require("daisyui"),
    require('tailwind-scrollbar-hide'),
  ],
}
