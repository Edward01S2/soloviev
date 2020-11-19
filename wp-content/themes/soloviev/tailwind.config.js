const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
    './resources/**/**/*.php',
    './resources/**/*.php',
    './resources/**/**/*.js',
    './resources/**/*.js',
    ],
    options: {
      whitelist: ['italic', 'text-c-blue-300', 'md:hidden'],
    }
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      transparent: colors.transparent,
      current: colors.current,
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      //'2xl': '1536px',
    },
    extend: {
      colors: {
        'c-yellow' : {
          100: '#FFC322',
        },
        'c-blue': {
          50: '#F0F3F7',
          100: '#5161AD',
          200: '#3C70F5',
          300: '#2F00F0',
          400: '#2600C0',
          500: '#141A23'
        },
        'c-red': {
          100: '#EE2929',
        },
        'c-green' : {
          50: '#A1B794',
          100: '#96B187',
          200: '#4C7445',
          300: '#0E3012',
        },
        'c-gray':  {
          100: '#f5f5f5',
          200: '#eeeeee',
          300: '#cccccc',
          400: '#c4c4c4',
          500: '#babec7',
          600: '#666666',
          900: '#999999',
        },
        'c-black' : {
          100: '#333333',
        }
      },
      fontFamily: {
        'mandrel' : [
          'mandrel-normal',
          'sans-serif'
        ],
        'work' : [
          'Work Sans',
          'sans-serif',
        ],
      },
      borderWidth: {
        '3': '3px'
      },
      inset: {
        '1/2' : '50%',
      },
      // fontSize: {
      //   '6.5xl': '5rem',
      //   '7xl': '6rem',
      //   '8xl': '7rem',
      //   '9xl': '10rem',
      // },
      maxWidth: {
        '384': '384px',
        '512': '512px',
        '640': '640px',
        '720': '720px',
      },
      spacing: {
        '2px': '2px',
        '3px': '3px',
        '18': '4.5rem',
        '44' : '11rem',
        '80' : '22rem',
        '84': '26rem',
        '100': '28rem',
        '104': '30rem',
        '108' : '32rem',
        '112' : '36rem',
        '116' : '38rem',
        '120' : '42rem',
        '124' : '48rem',
        '100vh' : '100vh',
      },
      opacity: {
        '31': '0.31',
        '90': '0.9',
      },
      screens: {
        //'2xl' : '1536px',
        // '3xl' : '1625px'
      },
      boxShadow: {
        'c1' : '0px 10px 14px rgba(0, 0, 0, 0.09)',
        'c2' : '0px 35.716px 30.6616px rgba(0, 0, 0, 0.13)',
        'c3' : '0px 6px 14px rgba(0, 0, 0, 0.26)',
        'c4' : '0px 50px 53px rgba(0, 0, 0, 0.15)',
      },
      transformOrigin: {
        '100' : '100% 0',
      },
      gridTemplateRows: {
      '8': 'repeat(8, minmax(0, 1fr))',
      },
    },
    typography: (theme) => ({
      default: {
        css: {
           color: theme('colors.c-black-100'),
        //   strong: {
        //     color: theme('colors.c-blue.200'),
        //   },
          'ul > li:before': {
            backgroundColor: theme('colors.black'),
          },
        }
      }
    })
  },
  variants: {
    // scale: ['responsive', 'hover', 'focus', 'group-hover'],
    // display: ['responsive', 'hover', 'group-hover'],
    borderColor: ({after}) => after(['group-hover']),
    boxShadow: ({after}) => after(['group-hover']),
    scale: ({after}) => after(['group-hover']),
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
  experimental: 'all',
}
