const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: {
                    DEFAULT: "#160E0E",
                    true: "#0E0906",
                },
                white: {
                    DEFAULT: "#F6F6F6",
                    true: "#FFFFFF",
                },
                red: {
                    navigation: "#A5281D",
                    navigation: "#A5281D",
                },
                gray: {
                    DEFAULT: "#A09693",
                },
                yellow: {
                    DEFAULT: "#DCB655",
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
