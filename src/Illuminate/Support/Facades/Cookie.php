<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Cookie\CookieJar 
 * @method static \Symfony\Component\HttpFoundation\Cookie make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true)
 * @method static \Symfony\Component\HttpFoundation\Cookie forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true)
 * @method static \Symfony\Component\HttpFoundation\Cookie forget($name, $path = null, $domain = null)
 * @method static bool hasQueued($key)
 * @method static \Symfony\Component\HttpFoundation\Cookie queued($key, $default = null)
 * @method static void queue()
 * @method static void unqueue($name)
 * @method static setDefaultPathAndDomain($path, $domain, $secure = false)
 * @method static array getQueuedCookies()
 */
class Cookie extends Facade
{
    /**
     * Determine if a cookie exists on the request.
     *
     * @param  string  $key
     * @return bool
     */
    public static function has($key)
    {
        return ! is_null(static::$app['request']->cookie($key, null));
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return string
     */
    public static function get($key = null, $default = null)
    {
        return static::$app['request']->cookie($key, $default);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie';
    }
}
