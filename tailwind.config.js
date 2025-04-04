module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.ts',
    './resources/**/*.tsx',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Source Sans Pro"', 'sans-serif'],
      },
      colors: {
        khaki: '#d0bd96',
        platinum: '#d9d9d9',
        onyx: '#1f2937',
      },
    },
  },
  plugins: [],
}
