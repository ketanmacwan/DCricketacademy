import { defineConfig } from 'vite';
import autoprefixer from 'autoprefixer';

export default defineConfig({
  css: {
    postcss: {
      plugins: [
        async () => {
          const { default: tailwindcss } = await import('tailwindcss');
          return tailwindcss;
        },
        autoprefixer,
      ],
    },
  },
  build: {
    rollupOptions: {
      output: {
        assetFileNames: 'css/[name].[ext]',
      },
    },
  },
});
