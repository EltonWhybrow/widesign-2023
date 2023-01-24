module.exports = {

  purge: false,
  theme: {
    zIndex: {
      '25': 25,
      '50': 50,
      '75': 75,
      '100': 100,
      'auto': 'auto',
    },
    container: {
      padding: {
        default: '0',
        sm: '.5rem',
        lg: '4rem',
        xl: '5rem',
      },
    }

    ,
    fontFamily: {
      sans: ['"Open Sans"', 'Helvetica', 'Arial', 'sans-serif'],
      azo: ['"azo-sans-web"', 'Open Sans', 'Arial', 'sans-serif'],
      // serif: [
      //   '"Open Sans"',
      //   'Helvetica',
      //   'Arial',
      //   '"sans-serif"',
      // ],
      // mono: [
      //   '"Open Sans"',
      //   'Helvetica',
      //   'Arial',
      //   '"sans-serif"',
      // ],
    },
    extend: {
      transitionProperty: {
        'width': 'width'
      },
      height: {
        '100': '48rem'
      },
      colors: {
        'info': {
          DEFAULT: '#BDE5F8',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#EBF7FD',
          '500': '#BDE5F8',
          '600': '#8FD3F3',
          '700': '#61C1EE',
          '800': '#33AFE9',
          '900': '#1696D3'
        },
        'success': {
          DEFAULT: '#DFF2BF',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#F4FBE9',
          '500': '#DFF2BF',
          '600': '#CAE995',
          '700': '#B5E16A',
          '800': '#9FD840',
          '900': '#86BE27'
        },
        'warning': {
          DEFAULT: '#FEEFB3',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#FFFAE5',
          '500': '#FEEFB3',
          '600': '#FDE481',
          '700': '#FDDA4E',
          '800': '#FCCF1C',
          '900': '#E2B503'
        },
        'alert': {
          DEFAULT: '#FF7070',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFD6D6',
          '400': '#FFA3A3',
          '500': '#FF7070',
          '600': '#FF3D3D',
          '700': '#FF0A0A',
          '800': '#D60000',
          '900': '#A30000'
        },
        gray: {
          '100': '#f7fafc',
          '200': '#edf2f7',
          '300': '#e2e8f0',
          '400': '#cbd5e0',
          '500': '#a0aec0',
          '600': '#718096',
          '700': '#4a5568',
          '800': '#2d3748',
          '900': '#1a202c',
        },
        orange: {
          '100': '#fffaf0',
          '200': '#feebc8',
          '300': '#fbd38d',
          '400': '#f6ad55',
          '500': '#ed8936',
          '600': '#dd6b20',
          '700': '#c05621',
          '800': '#9c4221',
          '900': '#7b341e',
        },
        teal: {
          '100': '#e6fffa',
          '200': '#b2f5ea',
          '300': '#81e6d9',
          '400': '#4fd1c5',
          '500': '#38b2ac',
          '600': '#319795',
          '700': '#2c7a7b',
          '800': '#285e61',
          '900': '#234e52',
        },
        link: {
          'default': '#3182ce',
          'hover': '#63b3ed',
        }
      },
      fontSize: {
        xxs: '0.675rem',
      },
      lineHeight: {
        tighter: '1.125',
      }

      ,
      minWidth: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        full: '100%',
      }

      ,
      backgroundImage: {
        // 'home-hero-sm': "url('https://staging.redhilltutoring.com/resources/images/maskhead/isometric-road-home-mob.svg')",
      }

      ,
    }
  }

  ,
  variants: {
    extend: {
      textColor: ['responsive', 'hover', 'focus', 'visited', 'group-hover'],
      backgroundColor: ['group-hover'],
      margin: ['first'], // TODO: might not work
      borderWidth: ['hover'], // not using yet
    }
  }

  ,
  future: {
    removeDeprecatedGapUtilities: true,
  }

  ,
  plugins: [({
    addUtilities
  }

  ) => {
    const utils = {
      '.translate-x-half': {
        transform: 'translateX(50%)',
      }

      ,
    }

      ;
    addUtilities(utils, ['responsive'])
  }

  ]
}

  ;