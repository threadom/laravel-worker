module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      blue: {
        50: 'hsl(210,65%,95%)',
        100: 'hsl(210,60%,90%)',
        200: 'hsl(210,55%,80%)',
        300: 'hsl(210,50%,70%)',
        400: 'hsl(210,45%,60%)',
        500: 'hsl(210,40%,50%)',
        600: 'hsl(210,35%,40%)',
        700: 'hsl(210,30%,30%)',
        800: 'hsl(210,25%,20%)',
        900: 'hsl(210,20%,10%)'
      },
    },
    extend: {},
  },
  variants: {
    extend: {
      backgroundColor: ['even','odd'],
    },
  },
  plugins: [],
}
