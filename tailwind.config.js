/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            // https://mdigi.tools/color-shades/
            colors: {
                'doccie-blue': {
                    100: '#e3f5ff',
                    200: '#aae0ff',
                    300: '#71cbff',
                    400: '#80d0ff',
                    500: '#38b6ff',
                    600: '#00a1ff',
                    700: '#007ec6',
                    800: '#005a8e',
                    900: '#003655',
                },
                'doccie-red': {
                    100: '#ffe3e3',
                    200: '#ffaaaa',
                    300: '#ff8080',
                    400: '#ff7171',
                    500: '#ff5757',
                    600: '#ff3939',
                    700: '#ff0000',
                    800: '#c60000',
                    900: '#8e0000',
                }
                },
        },
    },
  plugins: [
      require('@tailwindcss/typography'),
      require('flowbite/plugin')
  ],
}

