module.exports = {
    prefix: '',
    important: false,
    separator: ':',
    theme: {

        screens: {
            'sm': '576px',
            'md': '577px',
            'lg': '992px',
            'xl': '1200px',
        },

        fontFamily: {
            'sans': ['Nunito',
                'system-ui',
                'BlinkMacSystemFont',
                '-apple-system',
                'Segoe UI',
                'Roboto',
                'Oxygen',
                'Ubuntu',
                'Cantarell',
                'Fira Sans',
                'Droid Sans',
                'Helvetica Neue',
                'sans-serif',
            ],
            'serif': [
                'Constantia',
                'Lucida Bright',
                'Lucidabright',
                'Lucida Serif',
                'Lucida',
                'DejaVu Serif',
                'Bitstream Vera Serif',
                'Liberation Serif',
                'Georgia',
                'serif',
            ],
            'mono': [
                'Menlo',
                'Monaco',
                'Consolas',
                'Liberation Mono',
                'Courier New',
                'monospace',
            ],

        },

        fontSize: {
            'xs': '.75rem', // 12px
            'sm': '.875rem', // 14px
            'base': '1rem', // 16px
            'lg': '1.125rem', // 18px
            'xl': '1.25rem', // 20px
            '2xl': '1.5rem', // 24px
            '3xl': '1.875rem', // 30px
            '4xl': '2.25rem', // 36px
            '5xl': '3rem', // 48px
        },

        fontWeight: {
            'hairline': 100,
            'thin': 200,
            'light': 300,
            'normal': 400,
            'medium': 500,
            'semibold': 600,
            'bold': 700,
            'extrabold': 800,
            'black': 900,
        },

        lineHeight: {
            'none': 1,
            'tight': 1.25,
            'normal': 1.5,
            'loose': 2,
        },

        letterSpacing: {
            'tight': '-0.05em',
            'normal': '0',
            'wide': '0.05em',
        },

        textColor: theme => theme('colors'),

        backgroundColor: theme => theme('colors'),

        backgroundSize: {
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
        },

        borderWidth: {
            default: '1px',
            '0': '0',
            '2': '2px',
            '4': '4px',
            '8': '8px',
        },



        borderRadius: {
            'none': '0',
            'sm': '.125rem',
            default: '.25rem',
            'lg': '.5rem',
            'full': '9999px',
        },

        width: {
            'auto': 'auto',
            'px': '1px',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '16': '4rem',
            '24': '6rem',
            '32': '8rem',
            '48': '12rem',
            '64': '16rem',
            '1/2': '50%',
            '1/3': '33.33333%',
            '2/3': '66.66667%',
            '1/4': '25%',
            '3/4': '75%',
            '1/5': '20%',
            '2/5': '40%',
            '3/5': '60%',
            '4/5': '80%',
            '1/6': '16.66667%',
            '5/6': '83.33333%',
            'full': '100%',
            'screen': '100vw',
        },

        height: {
            'auto': 'auto',
            'px': '1px',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '16': '4rem',
            '24': '6rem',
            '32': '8rem',
            '48': '12rem',
            '64': '16rem',
            'full': '100%',
            'screen': '100vh',
        },

        minWidth: {
            '0': '0',
            'full': '100%',
        },

        minHeight: {
            '0': '0',
            'full': '100%',
            'screen': '100vh',
        },

        maxWidth: {
            '8': '2rem',
            'login': '25rem',
            'xs': '20rem',
            'sm': '30rem',
            'md': '40rem',
            'lg': '50rem',
            'xl': '60rem',
            '2xl': '70rem',
            '3xl': '80rem',
            '4xl': '90rem',
            '5xl': '100rem',
            'full': '100%',
        },

        maxHeight: {
            'full': '100%',
            'screen': '100vh',
        },

        padding: {
            'px': '1px',
            '0': '0',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '16': '4rem',
            '20': '5rem',
            '24': '6rem',
            '32': '8rem',
        },

        margin: {
            'auto': 'auto',
            'px': '1px',
            '0': '0',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '16': '4rem',
            '20': '5rem',
            '24': '6rem',
            '32': '8rem',
            '-px': '-1px',
            '-1': '-0.25rem',
            '-2': '-0.5rem',
            '-3': '-0.75rem',
            '-4': '-1rem',
            '-5': '-1.25rem',
            '-6': '-1.5rem',
            '-8': '-2rem',
            '-10': '-2.5rem',
            '-12': '-3rem',
            '-16': '-4rem',
            '-20': '-5rem',
            '-24': '-6rem',
            '-32': '-8rem',
        },

        BoxShadow: {
            default: '0 2px 4px 0 rgba(0,0,0,0.10)',
            'md': '0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08)',
            'lg': '0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08)',
            'inner': 'inset 0 2px 4px 0 rgba(0,0,0,0.06)',
            'outline': '0 0 0 3px rgba(52,144,220,0.5)',
            'none': 'none',
        },

        zIndex: {
            'auto': 'auto',
            '0': 0,
            '10': 10,
            '20': 20,
            '30': 30,
            '40': 40,
            '50': 50,
        },



        fill: {
            'current': 'currentColor',
        },

        stroke: {
            'current': 'currentColor',
        },



    },
    variants: {
        appearance: ['responsive'],
        backgroundAttachment: ['responsive'],
        backgroundColor: ['responsive', 'hover', 'focus','active'],
        backgroundPosition: ['responsive'],
        backgroundRepeat: ['responsive'],
        backgroundSize: ['responsive'],
        borderCollapse: [],
        borderColor: ['responsive', 'hover', 'focus'],
        borderRadius: ['responsive'],
        borderStyle: ['responsive'],
        borderWidth: ['responsive'],
        cursor: ['responsive'],
        display: ['responsive'],
        flexDirection: ['responsive'],
        flexWrap: ['responsive'],
        alignItems: ['responsive'],
        alignSelf: ['responsive'],
        justifyContent: ['responsive'],
        alignContent: ['responsive'],
        flex: ['responsive'],
        flexGrow: ['responsive'],
        flexShrink: ['responsive'],
        float: ['responsive'],
        fontFamily: ['responsive'],
        fontWeight: ['responsive', 'hover', 'focus'],
        height: ['responsive'],
        lineHeight: ['responsive'],
        listStylePosition: ['responsive'],
        listStyleType: ['responsive'],
        margin: ['responsive'],
        maxHeight: ['responsive'],
        maxWidth: ['responsive'],
        minHeight: ['responsive'],
        minWidth: ['responsive'],
        negativeMargin: ['responsive'],
        opacity: ['responsive'],
        outline: ['focus'],
        overflow: ['responsive'],
        padding: ['responsive'],
        pointerEvents: ['responsive'],
        position: ['responsive'],
        inset: ['responsive'],
        resize: ['responsive'],
        boxShadow: ['responsive', 'hover', 'focus'],
        fill: [],
        stroke: [],
        tableLayout: ['responsive'],
        textAlign: ['responsive'],
        textColor: ['responsive', 'hover', 'focus','active'],
        textSizes: ['responsive'],
        fontStyle: ['responsive', 'hover', 'focus'],
        fontSmoothing: ['responsive', 'hover', 'focus'],
        textDecoration: ['responsive', 'hover', 'focus'],
        textTransform: ['responsive', 'hover', 'focus'],
        letterSpacing: ['responsive'],
        userSelect: ['responsive'],
        verticalAlign: ['responsive'],
        visibility: ["responsive", "group-hover"],
        whitespace: ['responsive'],
        wordBreak: ['responsive'],
        width: ['responsive'],
        zIndex: ['responsive'],
        borderColors: ["responsive", "hover", "focus", "group-hover"],

    },
    corePlugins: {
        objectFit: false,
        objectPosition: false,
        container: true
    },
    plugins: [
        require('tailwindcss-plugins/pagination')
    ],


}
