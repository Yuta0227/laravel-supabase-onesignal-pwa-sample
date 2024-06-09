import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import basicSsl from "@vitejs/plugin-basic-ssl";

const host = "localhost";
const port = 8000;

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            buildDirectory: "/public/build/assets/",
        }),
        // basicSsl(),
    ],
    server: {
        https: true,
        proxy: {
            "^(?!(/@vite|/resources|/node_modules))": {
                target: `http://${host}:${port}`,
            },
        },
        host,
        port: 5173,
        hmr: { host },
    },
    build: {
        manifest: true,
        outDir: "public/build",
        rollupOptions: {
            output: {
                entryFileNames: "assets/[name]-[hash].js",
                chunkFileNames: "assets/[name]-[hash].js",
                assetFileNames: "assets/[name]-[hash].[ext]",
            },
        },
    },
});
