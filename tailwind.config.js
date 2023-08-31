/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.php"], // Especifica quais arquivos devem ser analisados pelo Tailwind
  darkMode: 'class', // Configuração válida para o modo escuro
  theme: {
    extend: {
      colors: {
        'primaria': '#2450A3',
        'secundaria': '#1194CF',
        'background': '#002D82',
        'text-1': '#1A2947',
        'text-2': '#8C9DC6',
        'icon-1': '#B7C6EB',
        'icon-2': '#5F40F9',
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
