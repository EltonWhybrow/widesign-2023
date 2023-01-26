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
    },
    rotate: {
      '360': '360deg',
    },
    fontFamily: {
      // widesign uses giddyup FONT in some form or other - consider redesign when time allows
      sans: ['"Open Sans"', 'Helvetica', 'Arial', 'sans-serif'],
      azo: ['"azo-sans-web"', 'Open Sans', 'Arial', 'sans-serif'],
    },
    extend: {
      transitionProperty: {
        'width': 'width'
      },
      height: {
        '100': '25rem',
        '128': '32rem',
        '156': '39rem',
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
        'teal': {
          DEFAULT: '#2A8B8C',
          50: '#90DDDE',
          100: '#80D8D9',
          200: '#61CED0',
          300: '#41C5C6',
          400: '#33AAAB',
          500: '#2A8B8C',
          600: '#1D6061',
          700: '#103536',
          800: '#030A0B',
          900: '#000000'
        },
        'plum': {
          DEFAULT: '#524D8C',
          50: '#BBB8D8',
          100: '#AEABD1',
          200: '#9591C2',
          300: '#7B77B4',
          400: '#625CA6',
          500: '#524D8C',
          600: '#3D3968',
          700: '#282544',
          800: '#12111F',
          900: '#000000'
        },
        'mellow': {
          DEFAULT: '#FFE345',
          50: '#FFFFFD',
          100: '#FFFCE8',
          200: '#FFF5BF',
          300: '#FFEF97',
          400: '#FFE96E',
          500: '#FFE345',
          600: '#FFDB0D',
          700: '#D4B400',
          800: '#9C8400',
          900: '#645500'
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
      },
      minWidth: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        full: '100%',
      },
      backgroundImage: {
        'testimonial': "url('/resources/img/pages/home/testimonial-paralax.jpg')",
        'whyus': "url('/resources/img/pages/home/widesign-elton.jpg')",
        'ux-ui': "url('/resources/img/pages/home/widesign-ux-ui.jpg')",
      },
      spacing: {
        '1/2': '50%',
        '1/3': '33.333333%',
        '2/3': '66.666667%',
        '1/4': '25%',
        '2/4': '50%',
        '3/4': '75%',
        '1/5': '20%',
        '2/5': '40%',
        '3/5': '60%',
        '4/5': '80%',
        '1/6': '16.666667%',
        '2/6': '33.333333%',
        '3/6': '50%',
        '4/6': '66.666667%',
        '5/6': '83.333333%',
        '1/12': '8.333333%',
        '2/12': '16.666667%',
        '3/12': '25%',
        '4/12': '33.333333%',
        '5/12': '41.666667%',
        '6/12': '50%',
        '7/12': '58.333333%',
        '8/12': '66.666667%',
        '9/12': '75%',
        '10/12': '83.333333%',
        '11/12': '91.666667%',
      }
    }
  },
  variants: {
    extend: {
      textColor: ['responsive', 'hover', 'focus', 'visited', 'group-hover'],
      backgroundColor: ['group-hover'],
      backgroundImage: ['hover'],
      filter: ['hover'],
      rotate: ['active', 'group-hover'],
      translate: ['group-hover', 'hover'],
      margin: ['first'], // TODO: might not work
      borderWidth: ['hover'], // not using yet,
    }
  },
  future: {
    removeDeprecatedGapUtilities: true,
  },
  plugins: [({
    addUtilities
  }) => {
    const utils = {
      '.translate-x-half': {
        transform: 'translateX(50%)',
      },
    };
    addUtilities(utils, ['responsive'])
  }]
};