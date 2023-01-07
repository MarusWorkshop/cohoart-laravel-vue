/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            height: {
                'trueH': 'calc(var(--vh, 100vh))',
            },
        },
    },
    plugins: [],
}
