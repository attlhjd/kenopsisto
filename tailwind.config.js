/** @type {import('tailwindcss').Config} */
export default {
    important: true,
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        backgroundImage: {
            'home': "url('/homepages/fond.jpg')",
        },
        fontFamily: {
            'fortyseven-micro': ["'FortySeven Micro NBP'", 'sans-serif'],
            'fortyseven': ["'FortySeven NBP'", 'sans-serif'],
            'whyte': ["'Whyte'", 'sans-serif'],
            'neuebit': ["'NeueBit'", 'sans-serif'],
        },
    },
  },
  plugins: [],
}

