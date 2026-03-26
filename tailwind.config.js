import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/View/ComponentViews.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gsm: {
                    50: '#f8fafc',
                    100: '#f1f5f9',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#94a3b8',
                    500: '#64748b',
                    600: '#475569',
                    700: '#334155',
                    800: '#1e293b',
                    900: '#0f172a',
                    primary: '#3b82f6',
                    secondary: '#10b981',
                    accent: '#f59e0b',
                    danger: '#ef4444',
                    success: '#10b981',
                    info: '#3b82f6',
                    warning: '#f59e0b',
                },
            },
            borderRadius: {
                'gsm-sm': '0.125rem',
                'gsm-md': '0.375rem',
                'gsm-lg': '0.5rem',
                'gsm-xl': '0.75rem',
            },
            boxShadow: {
                'gsm-soft': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                'gsm-hard': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            }
        },
    },

    plugins: [forms],
};
