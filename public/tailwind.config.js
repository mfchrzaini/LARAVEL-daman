/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}", "./admin/**/*.{html,js}"],
  theme: {
    fontFamily: {
      jktSans: ['Plus+Jakarta+Sans'],
      Lato: ['Lato'],
    },
    extend: {
      colors: {
        primary: '#8B0E0D',
        primary2: '#B31312', 
        primary3: '#9E100F',
        primary4: '#0E328B',
        primary_hover: '#70100F',
        biru: '#0E388B',
        secondary: '#F2F4F9',
        secondaryMd: '#DB9B9A',
        welcome: '#2F2F2F',
        jasmine: '#FBD87F',
        periwinkle: '#DCD6F7',
        russianViolettte: '#0D0630',
        spaceCadet: '#25283D',
        ashGray: '#585875',
        white2: '#FAFCFF',
        earieBlack: '#171A21',
        nickel: '#617073',
        devyGrey: '#474A48',
        spanishGray: '#909590',
        isabelline: '#F5EFED',
        barnRed: '#6F1A07',
        darkBlue: '#0F172A',
      },
    },
  },
  plugins: [],
}










