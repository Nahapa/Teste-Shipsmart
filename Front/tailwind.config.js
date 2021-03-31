module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'layout': {
          'body': '#F1F1F1',
          'sidebar': '#F6F6F6',
        },
        'theme': {
          'primary': '#0c0f0f',
          'secondary': '#000000',
          'striped': '#0c0f0f11',
        }
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['even', 'odd'],
    },
  },
  plugins: [],
}
