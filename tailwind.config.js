/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: ["./*.{php,html,js}","./template-parts/*.{php,html,js}"],
  theme: {
    extend: {},
  },
  plugins: [require('@downwindcss/text-decoration')],
}

