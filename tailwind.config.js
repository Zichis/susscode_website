module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'play': ['Play', 'sans-serif']
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
