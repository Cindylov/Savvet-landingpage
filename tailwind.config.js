/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html"],
  theme: {
    extend: {
      colors: {
        primary1:'#3B3548',
        primary2: '#F76C5E',
        primary3: '#FFF4E4',
        hover1: '#B892FF',
        primary3:'#FFF1D0',
        customYellow: '#F0C808',
        customBlue: '#2E5EAA',
        customSky: '#41EAD4',
        customOrange: '#F68E5F',
      },
      fontFamily: {
        raleway: ['Raleway', 'sans-serif'],
        odorMeanChey: ['Odor Mean Chey', 'cursive'],
      },
      fontSize: {
        'custom-53': '53px', // Custom font size
      },
      lineHeight: {
        'custom-74': '74.62px', // Custom line height
      },
      boxShadow: {
        buttonShadow: '3px 4px 0px 0px #3B3548', // Example Figma shadow
        dotShadow: '0.06rem 0.09rem 0px 0px #3B3548', // Example Figma shadow
      },

      animation: {
        marquee: "marquee 20s linear infinite",
      },
      keyframes: {
        marquee: {
          "0%": { transform: "translateX(0)" },
          "100%": { transform: "translateX(-100%)" },
        },
      },
    },
  },
  plugins: [
    function({ addUtilities }) {
      addUtilities({
        '.scrollbar-hidden': {
          'scrollbar-width': 'none', // Hide for Firefox
          '-ms-overflow-style': 'none', // Hide for IE and Edge
        },
        '.scrollbar-hidden::-webkit-scrollbar': {
          display: 'none', // Hide for Chrome, Safari, and Opera
        },

        //text shadows
        '.text-shadow-sm': {
          textShadow: '1px 1px 0 #3B3548',
        },
        '.text-shadow': {
          textShadow: '3px 3px 0 #3B3548',
        },
        '.text-shadow-lg': {
          textShadow: '5px 5px 0 #3B3548',
        },
        '.text-shadow-none': {
          textShadow: 'none',
        },
      });
    },
  ],
}

