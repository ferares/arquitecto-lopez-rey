import { getRelativeLocaleUrl } from "astro:i18n";

import { defaultLocale, paths, locales, type Locale, type RouteKey } from "./config";

import en from './en.json';
import es from './es.json';

const translations: Record<Locale, typeof es> = { en, es };

export function useTranslations(locale: Locale = defaultLocale) {
  return function t(key: keyof typeof es) {
    return translations[locale][key] ?? translations[defaultLocale][key] ?? key;
  }
}

export function getLocalizedUrl(route: RouteKey, locale: string = defaultLocale) {
  const localizedPath = paths[locale as Locale]?.[route];
  return getRelativeLocaleUrl(locale, localizedPath);
}

export function getRouteKeyFromPath(pathname: string): RouteKey {
  const clean = pathname.replace(/^\/(en|es)(\/|$)/, "").replace(/^\/|\/$/g, "");
  if (!clean) return "home";
  for (const locale of locales) {
    for (const [routeKey, localizedPath] of Object.entries(paths[locale])) {
      if (localizedPath === clean) {
        return routeKey as RouteKey;
      }
    }
  }
  return "home";
}