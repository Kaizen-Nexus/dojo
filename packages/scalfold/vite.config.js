import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import path from 'path';
export default defineConfig({
  plugins: [
    tailwindcss(),
  ],
  server: {
    cors: true
  },
  build: {
    outDir: path.join(__dirname, "dist"),
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
        input: {
            style: path.resolve(__dirname, 'assets/css/tailwind.css'),
        }
    }
  }
})
