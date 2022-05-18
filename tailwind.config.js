module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                raleway: ["Raleway", "sans-serif"],
                serif: ["Times New Roman"],
            },
            colors: {
                primary: "#D8251E",
                dark: "#14212B",
            },
        },
    },
    plugins: [],
};
