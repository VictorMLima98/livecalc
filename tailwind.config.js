module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            colors: {
              apple: {
                'light-gray': '#D4D4D2',
                'black': '#1C1C1C',
                'dark-gray': '#505050',
                'orange': '#FF9500'
              },
            }
          },
    },
    plugins: [],
}
