import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        blue: {
          50: '#ebf8ff',
          600: '#2563eb',
        },
        purple: {
          50: '#f5f3ff',
          700: '#7e22ce',
        },
      },
    },
  },
  plugins: [],
};

