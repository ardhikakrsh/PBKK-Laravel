/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                login1: "url('assets/img/ls2.jpg')",
            },
        },
    },
    plugins: [require("@tailwindcss/aspect-ratio"), require("flowbite/plugin")],
};
