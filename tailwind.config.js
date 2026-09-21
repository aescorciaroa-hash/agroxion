import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                heading: ['Outfit', 'sans-serif'],
            },
            colors: {
                agro: {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                    800: '#166534',
                    900: '#14532d',
                    950: '#052e16',
                },
                harvest: {
                    50: '#fffbeb',
                    100: '#fef3c7',
                    200: '#fde68a',
                    300: '#fcd34d',
                    400: '#fbbf24',
                    500: '#f59e0b',
                    600: '#d97706',
                    700: '#b45309',
                    800: '#92400e',
                    900: '#78350f',
                    950: '#451a03',
                },
                soil: {
                    800: '#1e293b',
                    850: '#162032',
                    900: '#0f172a',
                    950: '#080d1a',
                },
            },
            boxShadow: {
                'agro': '0 10px 25px -5px rgba(22, 101, 52, 0.15), 0 8px 10px -6px rgba(22, 101, 52, 0.1)',
                'agro-lg': '0 20px 30px -10px rgba(22, 101, 52, 0.25)',
                'harvest': '0 10px 25px -5px rgba(217, 119, 6, 0.15)',
            },
        },
    },

    plugins: [forms],
};
