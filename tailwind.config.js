const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  theme: {
    extend: {
      colors: {
        m10: 'rgba(48, 122, 102, 1.00)',
        m30: 'rgba(36, 92, 166, 1.00)',
        m40: 'rgba(112, 54, 145, 1.00)',
        m50: 'rgba(219, 41, 117, 1.00)',
        m60: 'rgba(232, 138, 48, 1.00)',
        m90: 'rgba(249, 233, 0, 1.00)',
        sro: 'rgba(107, 156, 41, 1.00)',
        eco: 'rgba(232, 156, 0, 1.00)'
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui')
  ],
}
