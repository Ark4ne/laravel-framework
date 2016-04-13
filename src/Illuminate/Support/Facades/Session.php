<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Session\SessionManager 
 * @method static array getSessionConfig()
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver($name)
 * @method static mixed driver($driver = null)
 * @method static extend($driver, \Closure $callback)
 * @method static array getDrivers()
 * @see \Illuminate\Session\Store 
 * @method static start()
 * @method static getId()
 * @method static setId($id)
 * @method static bool isValidId($id)
 * @method static getName()
 * @method static setName($name)
 * @method static invalidate($lifetime = null)
 * @method static migrate($destroy = false, $lifetime = null)
 * @method static bool regenerate($destroy = false)
 * @method static save()
 * @method static void ageFlashData()
 * @method static has($name)
 * @method static get($name, $default = null)
 * @method static mixed pull($key, $default = null)
 * @method static bool hasOldInput($key = null)
 * @method static mixed getOldInput($key = null, $default = null)
 * @method static set($name, $value)
 * @method static void put($key, $value = null)
 * @method static void push($key, $value)
 * @method static void flash($key, $value)
 * @method static void now($key, $value)
 * @method static void flashInput(array $value)
 * @method static void reflash()
 * @method static void keep($keys = null)
 * @method static all()
 * @method static replace(array $attributes)
 * @method static remove($name)
 * @method static void forget($keys)
 * @method static clear()
 * @method static void flush()
 * @method static isStarted()
 * @method static registerBag(\Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag)
 * @method static getBag($name)
 * @method static getMetadataBag()
 * @method static array getBagData($name)
 * @method static string token()
 * @method static string getToken()
 * @method static void regenerateToken()
 * @method static string previousUrl()
 * @method static void setPreviousUrl($url)
 * @method static void setExists($value)
 * @method static \SessionHandlerInterface getHandler()
 * @method static bool handlerNeedsRequest()
 * @method static void setRequestOnHandler(\Symfony\Component\HttpFoundation\Request $request)
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
