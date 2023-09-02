/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.php"], 
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'primaria': '#2A3965',
        'secundaria': '#1194CF',
        'background': '#F2F6FF',
        'background-2': '#DEE9F7',
        'text-1': '#1A2947',
        'text-2': '#8C9DC6',        
        'icon-1': '#2A3965',
        'icon-2': '#BEB8FF',
        'category-bg1': '#DEE9F7',
        'category-bg2': '#9184FF',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
