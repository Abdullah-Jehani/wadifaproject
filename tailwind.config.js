/** @type {import('tailwindcss').Config} */
export default {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:  {
      'alexandria' : 'alexandria' 
    } , 
    colors: {
        'primary' : '#1B43A9',
        'white' : '#FFFFFF',
        'background' : '#F5F9F9' , 
        'inputfield' : '#F3F5F6' , 
        'danger' : '#dc2626'
    },
    extend: {},
  },
  plugins: [],
}

