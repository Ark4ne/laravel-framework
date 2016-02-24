<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Translation\Translator
 * @method static bool hasForLocale($key, $locale = null)
 * @method static bool has($key, $locale = null, $fallback = true)
 * @method static string get($key, array $replace = [], $locale = null, $fallback = true)
 * @method static string choice($key, $number, array $replace = [], $locale = null)
 * @method static string trans($id, array $parameters = [], $domain = "messages", $locale = null)
 * @method static string transChoice($id, $number, array $parameters = [], $domain = "messages", $locale = null)
 * @method static void load($namespace, $group, $locale)
 * @method static void addNamespace($namespace, $hint)
 * @method static array parseKey($key)
 * @method static \Symfony\Component\Translation\MessageSelector getSelector()
 * @method static void setSelector(\Symfony\Component\Translation\MessageSelector $selector)
 * @method static \Illuminate\Translation\LoaderInterface getLoader()
 * @method static string locale()
 * @method static string getLocale()
 * @method static void setLocale($locale)
 * @method static string getFallback()
 * @method static void setFallback($fallback)
 * @method static void setParsedKey($key, $parsed)
 */
class Lang extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'translator';
    }
}
