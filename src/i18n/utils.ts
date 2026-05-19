import { getRelativeLocaleUrl } from 'astro:i18n';
import { defaultLocale, type Locale } from './config';

import en from './en.json';
import es from './es.json';

const translations: Record<Locale, typeof es> = { en, es };

export function useTranslations(locale: Locale = defaultLocale) {
  return function t(key: keyof typeof es) {
    return translations[locale][key] ?? translations[defaultLocale][key] ?? key;
  }
}

export function getLocalizedUrl(path: string, locale?: string) {
  return getRelativeLocaleUrl(locale ?? defaultLocale, path)
}