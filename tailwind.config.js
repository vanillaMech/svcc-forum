module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        navleft: '#000b0b',
        navmid: {
        100: '#096279',
        200: '#00ffd1',
        }
      },
      
      backgroundImage: theme => ({
        'hero-pattern': "assets/background.png",
       })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
