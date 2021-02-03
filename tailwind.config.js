const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    // purge: [
    //     './vendor/laravel/jetstream/**/*.blade.php',
    //     './storage/framework/views/*.php',
    //     './resources/views/**/*.blade.php',
    // ],

    darkMode: false,

    theme: {
        extend: {
            colors: {
                whujo: "#E32a2e",
                primary: {
                    DEFAULT: "#E32a2e",
                    light: "#e64144",
                    dark: "#d71c20",
                },
                secondary: {
                    DEFAULT: "#3D2b60",
                    light: "#483372",
                    dark: "#32234e",
                },
                third: {
                    golden: "#EFD437",
                    cardinal: "#C2292F",
                    carrot: "#F59222",
                    orange: "#EE6629",
                    jacarta: "#3D2b60",
                    cinnabar: "#ED4340",
                    yonder: "#667ab3",
                },
                success: {
                    DEFAULT: "#00E676",
                    light: "#69F0AE",
                    dark: "#00C853",
                },
                info: {
                    DEFAULT: "#3D5AFE",
                    light: "#536DFE",
                    dark: "#304FFE",
                },
                warning: {
                    DEFAULT: "#FFEA00",
                    light: "#FFFF00",
                    dark: "#FFD600",
                },
                danger: {
                    DEFAULT: "#C62828",
                    light: "#D32F2F",
                    dark: "#B71C1C",
                },
                dark: "#212121",
                disabled: {
                    DEFAULT: "#757575",
                    light: "#BDBDBD",
                },
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                whujo: ["arial"],
            },
            maxHeight: {
                modal: "35rem",
            },
        },
        borderColor: (theme) => ({
            ...theme("colors"),
            DEFAULT: theme("colors.gray.300", "currentColor"),
        }),
    },

    variants: {
        extend: {
            translate: ["group-hover"],
            backgroundColor: ["active"],
            textColor: ["active"],
            borderWidth: ["hover", "focus"],
            fontWeight: ["hover"],
            ringOpacity: ["hover"],
            opacity: ["disabled"],
            display: ["group-hover"],
        },
        opacity: ["responsive", "hover", "focus", "disabled", "active"],
    },
    plugins: [require("tailwindcss-brand-colors")],
    // plugins: [require("@tailwindcss/ui")]
};
