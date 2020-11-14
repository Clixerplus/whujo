const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
   // purge: [
   //     './vendor/laravel/jetstream/**/*.blade.php',
   //     './storage/framework/views/*.php',
   //     './resources/views/**/*.blade.php',
   // ],

    theme: {
        extend: {
            boxShadow: {
                card: '0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)',
            },
            fontFamily: {
                sans: ['Quicksand', ...defaultTheme.fontFamily.sans],
                whujo:['arial'],
            },
            colors: {
                primary: {
                    lighter: '#ff2e31',
                    default: '#E32a2e',
                    dark:    '#bd2225',
                },
                secondary: {
                    lighter: '#CBD5E0',
                    default: '#1A202C',
                },
            },
        },
    },


    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};