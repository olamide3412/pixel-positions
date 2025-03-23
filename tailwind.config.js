/** @type {import('tailwindcss').Config} */
export default {
  content:[
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors:{
            "black": "#060606",
            primary: '#FF6363',
            secondary: {
            100: '#E2E2D5',
            200: '#888883',
            }
        },
        fontFamily:{
            "hanken-grotesk":["Hanken Grotesk", "sans-serif"]
        },
        fontSize:{
            "2xs": ".625rem"//10px
        },

    },
  },
  plugins: [],
}

