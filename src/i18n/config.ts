export const locales = ["es", "en"] as const
export type Locale = typeof locales[number]
export const defaultLocale: Locale = "es"
export const routeKeys = ["home", "personal", "projects"] as const;
export type RouteKey = typeof routeKeys[number];
export const paths: Record<Locale, Record<RouteKey, string>> = {
  en: {
    home: "",
    personal: "personal",
    projects: "projects",
  },

  es: {
    home: "",
    personal: "personal",
    projects: "proyectos",
  },
};