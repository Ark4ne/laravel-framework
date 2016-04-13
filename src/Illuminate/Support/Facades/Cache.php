<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Cache\CacheManager 
 * @method static mixed store($name = null)
 * @method static mixed driver($driver = null)
 * @method static \Illuminate\Cache\Repository repository(\Illuminate\Contracts\Cache\Store $store)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver($name)
 * @method static extend($driver, \Closure $callback)
 * @see \Illuminate\Cache\Repository 
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static bool has($key)
 * @method static mixed get($key, $default = null)
 * @method static array many(array $keys)
 * @method static mixed pull($key, $default = null)
 * @method static void put($key, $value, $minutes = null)
 * @method static void putMany(array $values, $minutes)
 * @method static bool add($key, $value, $minutes)
 * @method static void forever($key, $value)
 * @method static mixed remember($key, $minutes, \Closure $callback)
 * @method static mixed sear($key, \Closure $callback)
 * @method static mixed rememberForever($key, \Closure $callback)
 * @method static bool forget($key)
 * @method static \Illuminate\Cache\TaggedCache tags($names)
 * @method static int getDefaultCacheTime()
 * @method static void setDefaultCacheTime($minutes)
 * @method static \Illuminate\Contracts\Cache\Store getStore()
 * @method static bool offsetExists($key)
 * @method static mixed offsetGet($key)
 * @method static void offsetSet($key, $value)
 * @method static void offsetUnset($key)
 * @method static mixed macroCall($method, $parameters)
 */
class Cache extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cache';
    }
}
