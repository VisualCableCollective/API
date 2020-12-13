const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'home-1': "url('/img/bg/home-1.jpg')",
                'products-vtcm-home': "url('/img/bg/products-vtcm-home.png')",
                //errors
                '404': "url('/img/bg/404.jpg')",
            }),
            minHeight: { 
                '25vh': '25vh',
            },
            backgroundColor: theme => ({
                'dark-1': '#0d0d0d',
                'dark-2': '#121212',
                'dark-3': '#1c1c1c',
                'dark-4': '#2b2b2b',
                'dark-5': '#363636',
            }),
            borderColor: theme => ({
                'dark-1': '#333',
            }),
            textColor: {
                'dark': '#7d7d7d',
            }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
