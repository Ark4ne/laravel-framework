<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Config\Repository 
 * @method static bool has($key)
 * @method static mixed get($key, $default = null)
 * @method static void set($key, $value = null)
 * @method static void prepend($key, $value)
 * @method static void push($key, $value)
 * @method static array all()
 * @method static bool offsetExists($key)
 * @method static mixed offsetGet($key)
 * @method static void offsetSet($key, $value)
 * @method static void offsetUnset($key)
 */
class Config extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'config';
    }
}
