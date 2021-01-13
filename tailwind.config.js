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
                primary: {
                    light: "var(--color-primary-light)",
                    DEFAULT: "var(--color-primary)",
                    dark: "var(--color-primary-dark)",
                },
                secondary: {
                    light: "var(--color-secondary-light)",
                    DEFAULT: "var(--color-secondary)",
                },
                success: "var(--color-success)",
                info: "var(--color-info)",
                danger: "var(--color-danger)",
                warning: "var(--color-warning)",
                useful: "var(--color-useful)",
            },
            boxShadow: {
                w1:
                    "0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)",
                w2:
                    "0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)",
                w3:
                    "0 12px 15px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19)",
                card:
                    "0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)",
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
        },
        opacity: ["responsive", "hover", "focus", "disabled", "active"],
    },
    plugins: [require("tailwindcss-brand-colors")],
    // plugins: [require("@tailwindcss/ui")]
};
