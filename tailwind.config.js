/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html"],
  theme: {
    extend: {
      colors: {
        primary1: '#3B3548',
        primary2: '#F76C5E',
        primary3: '#FFF4E4',
        primary4: '#252121A8',
        hover1: '#B892FF',
        customYellow: '#F0C808',
        customBlue: '#2E5EAA',
        customSky: '#41EAD4',
        customOrange: '#F68E5F',
        'video-btn-color': '#2E4057',
      },
      backgroundImage: {
        videoSectionBg: 'radial-gradient(41.93% 137.21% at 58.07% 56.6%, rgba(190, 179, 163, 0.4) 0%, rgba(184, 146, 255, 0.308) 100%)',
      },
      fontFamily: {
        raleway: ['Raleway', 'sans-serif'],
        odorMeanChey: ['Odor Mean Chey', 'cursive'],
      },
      fontSize: {
        'custom-53': '53px', // Custom font size
        'custom-48': '48px', // Custom font size
        'custom-24': '24px', // Custom font size
        'custom-16': '16px', // Custom font size
      },
      lineHeight: {
        'custom-74': '74.62px', // Custom line height
        'custom-67': '67.58px', // Custom line height
      },
      boxShadow: {
        buttonShadow: '3px 4px 0px 0px #3B3548', // Example Figma shadow
        dotShadow: '0.06rem 0.09rem 0px 0px #3B3548', // Example Figma shadow
        videoShadow: '-16px 8px 0 0 #2E4057',
        'inner-custom': 'inset 0 4px 9px 0 #00000040, inset 0 -4px 13px 0 #00000040',
      },

      animation: {
        marquee: "marquee 20s linear infinite",
        vibrate: 'vibrate 0.1s linear infinite',
        curvyLine: 'draw 2s ease-in-out forwards',

        fadeOut: 'fadeOut 0.5s ease-in-out forwards',
        scaleOut: 'scaleOut 0.5s ease-in-out forwards',
        translateLeft: 'translateLeft 0.5s ease-in-out forwards',
        popOut: 'popOut 0.5s ease-in-out forwards',
      },

      keyframes: {
        marquee: {
          "0%": { transform: "translateX(0)" },
          "100%": { transform: "translateX(-100%)" },
        },

        vibrate: {
          '0%': { transform: 'translate(0, 0)' },
          '20%': { transform: 'translate(-2px, 2px)' },
          '40%': { transform: 'translate(2px, -2px)' },
          '60%': { transform: 'translate(-2px, -2px)' },
          '80%': { transform: 'translate(2px, 2px)' },
          '100%': { transform: 'translate(0, 0)' },
        },

        fadeOut: {
          '0%': { opacity: '1' },
          '100%': { opacity: '0' },
        },
        scaleOut: {
          '0%': { transform: 'scale(1)', opacity: '1' },
          '100%': { transform: 'scale(0)', opacity: '0' },
        },
        translateLeft: {
          '0%': { transform: 'translateX(0)', opacity: '0' },
          '100%': { transform: 'translateX("1000px")', opacity: '1' },
        },
        popOut: {
          '0%': { transform: 'scale(0.8)', opacity: '0' },
          '50%': { transform: 'scale(1.2)', opacity: '1' },
          '100%': { transform: 'scale(1.0)', opacity: '1' },
        },
      },
    },
  },
  plugins: [

    function ({ addUtilities }) {
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

