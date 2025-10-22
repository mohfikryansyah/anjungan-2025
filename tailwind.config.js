/** @type {import('tailwindcss').Config} */
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
                'inter': ['Inter', 'sans'],
                'poppins': ['Poppins', 'sans']
            },
            colors: {
                custom: {
                    100: '#069550',
                }
            }
        },
    },
    plugins: [require("flowbite/plugin")],
};
