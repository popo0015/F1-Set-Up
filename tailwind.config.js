module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                orbitron: ['Orbitron', 'sans-serif'],
                racing: ['Racing Sans One', 'sans-serif'],
            },
            colors: {
                'darkBG': '#1E222E',
                'lightBG': '#627079',
            },
        },
    },
    plugins: [],
};
