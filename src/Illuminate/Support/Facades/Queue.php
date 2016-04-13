<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Queue\QueueManager 
 * @method static void before($callback)
 * @method static void after($callback)
 * @method static void looping($callback)
 * @method static void failing($callback)
 * @method static void stopping($callback)
 * @method static bool connected($name = null)
 * @method static \Illuminate\Contracts\Queue\Queue connection($name = null)
 * @method static void extend($driver, \Closure $resolver)
 * @method static void addConnector($driver, \Closure $resolver)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver($name)
 * @method static string getName($connection = null)
 * @method static bool isDownForMaintenance()
 * @see \Illuminate\Queue\Queue 
 * @method static mixed pushOn($queue, $job, $data = "")
 * @method static mixed laterOn($queue, $delay, $job, $data = "")
 * @method static mixed bulk($jobs, $data = "", $queue = null)
 * @method static void setContainer(\Illuminate\Container\Container $container)
 * @method static void setEncrypter(\Illuminate\Contracts\Encryption\Encrypter $crypt)
 */
class Queue extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'queue';
    }
}
