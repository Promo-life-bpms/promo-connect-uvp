/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./node_modules/flowbite/**/*.js"],
    theme: {
        extend: {
            colors: {
                "regal-blue": "#243c5a",
                "btn-amarillo-herdez": "#F2BB13",
                "btn-gris-herdez": "#ACACAC",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
