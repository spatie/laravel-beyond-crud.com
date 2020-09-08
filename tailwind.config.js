const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    important: true,
    theme: {
        fontFamily: {
            sans: ["Inter", ...defaultTheme.fontFamily.sans],
            display: ["Jost", ...defaultTheme.fontFamily.sans]
        },
        colors: {
            transparent: "transparent",
            white: "var(--white)",
            black: "var(--black)",
            blue: {
                300: "var(--blue-300)",
                400: "var(--blue-400)",
                500: "var(--blue-500)"
            },

            spatie: {
                500: "var(--spatie-500)",
                600: "var(--spatie-600)"
            },
            green: {
                300: "var(--green-300)",
                400: "var(--green-400)",
                500: "var(--green-500)",
                600: "var(--green-600)",
                700: "var(--green-700)",
                800: "var(--green-800)"
            },
            orange: {
                400: "var(--orange-400)",
                500: "var(--orange-500)"
            },
            yellow: {
                400: "var(--yellow-400)",
                500: "var(--yellow-500)",
                600: "var(--yellow-600)"
            },
            red: {
                100: "var(--red-100)",
                150: "var(--red-150)",
                200: "var(--red-200)",
                300: "var(--red-300)",
                400: "var(--red-400)",
                500: "var(--red-500)",
                600: "var(--red-600)",
                700: "var(--red-700)"
            },
            gray: {
                100: "var(--gray-100)",
                200: "var(--gray-200)",
                300: "var(--gray-300)",
                400: "var(--gray-400)",
                500: "var(--gray-500)",
                600: "var(--gray-600)",
                700: "var(--gray-700)",
                800: "var(--gray-800)",
                900: "var(--gray-900)"
            }
        },

        extend: {
            inset: {
                full: "100%"
            },
            boxShadow: {
                nav:
                    "0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025)"
            },
            fill: theme => ({
                white: theme("colors.white")
            }),
            screens: {
                xs: "420px"
            }
        }
    },
    variants: {
        opacity: ["responsive", "hover", "focus", "group-hover"]
    }
};
