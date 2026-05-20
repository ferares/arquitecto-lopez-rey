// @ts-check
import { defineConfig } from "astro/config";

import { locales, defaultLocale } from "./src/i18n/config";

// https://astro.build/config
export default defineConfig({
  site: "https://arquitectolopezrey.com",
  redirects: {
    "/": `/${defaultLocale}`
  },
  i18n: {
    locales: [...locales],
    defaultLocale,
    routing: {
      prefixDefaultLocale: true,
      redirectToDefaultLocale: true,
    }
  }
});
