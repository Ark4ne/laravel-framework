<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Redis\Database 
 * @method static \Predis\ClientInterface connection($name = "default")
 * @method static mixed command($method, array $parameters = [])
 * @method static void subscribe($channels, \Closure $callback, $connection = null, $method = "subscribe")
 * @method static void psubscribe($channels, \Closure $callback, $connection = null)
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
