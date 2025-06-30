module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.ts',
    './resources/**/*.tsx',
    './resources/**/*.scss',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Source Sans Pro"', 'sans-serif'],
        montserrat: ['Montserrat', 'serif'],
      },
      colors: {
        khaki: '#d0bd96',
        platinum: '#d9d9d9',
        onyx: '#1f2937',
      },
      animation: {
        rotation: 'rotation 1s linear infinite',
        move: 'move 12s linear infinite',
      },
      keyframes: {
        rotation: {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
        move: {
          '0%': {
            left: '0',
            transform: 'translateX(-100%) translateY(-50%)'
          },
          '4%': {
            left: '100%',
            transform: 'translateX(100%) translateY(-50%)'
          },
          '50%': {
            left: '100%',
            transform: 'translateX(100%) translateY(-50%)'
          },
          '54%': {
            left: '0',
            transform: 'translateX(-100%) translateY(-50%)'
          },
          '100%': {
            left: '0',
            transform: 'translateX(-100%) translateY(-50%)'
          },
        },
      },
    },
  },
  plugins: [],
}
