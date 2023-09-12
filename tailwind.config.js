/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                en: ["Montserrat", "sans"],
                ja: ["'M PLUS 1p'", "sans"],
            },
        },
    },
    plugins: [require("daisyui")],
};
