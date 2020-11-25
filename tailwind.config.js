const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    // purge: [
    //     './vendor/laravel/jetstream/**/*.blade.php',
    //     './storage/framework/views/*.php',
    //     './resources/views/**/*.blade.php',
    // ],

    darkMode: false,

    theme: {
        extend: {
            boxShadow: {
                w1:
                    "0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)",
                w2:
                    "0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)",
                w3:
                    "0 12px 15px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19)",
                card:
                    "0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
            },
            fontFamily: {
                sans: ["Quicksand", ...defaultTheme.fontFamily.sans],
                whujo: ["arial"]
            },
            colors: {
                primary: {
                    lighter: "#ff2e31",
                    DEFAULT: "#E32a2e",
                    dark: "#bd2225"
                },
                secondary: {
                    lighter: "#CBD5E0",
                    DEFAULT: "#1A202C"
                }
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"]
    },

    plugins: [require("@tailwindcss/ui")]
};
