import "./bootstrap";
import { createInertiaApp } from "@inertiajs/react";
import { CssBaseline } from "@mui/material";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import type { ReactNode } from "react";
import { createRoot } from "react-dom/client";

createInertiaApp({
  title: (title) => `Demo - ${title}`,
  resolve: async (name) => {
    return (await resolvePageComponent(
      `./Pages/${name}.tsx`,
      import.meta.glob("./Pages/**/*.tsx"),
    )) as { default: { layout?: (pageProps: ReactNode) => ReactNode } };
  },
  setup({ el, App, props }) {
    const root = createRoot(el);

    root.render(
      <>
        <CssBaseline />
        <App {...props} />
      </>,
    );
  },
});
