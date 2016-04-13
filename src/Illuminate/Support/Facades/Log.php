<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Log\Writer 
 * @method static void emergency($message, array $context = [])
 * @method static void alert($message, array $context = [])
 * @method static void critical($message, array $context = [])
 * @method static void error($message, array $context = [])
 * @method static void warning($message, array $context = [])
 * @method static void notice($message, array $context = [])
 * @method static void info($message, array $context = [])
 * @method static void debug($message, array $context = [])
 * @method static void log($level, $message, array $context = [])
 * @method static void write($level, $message, array $context = [])
 * @method static void useFiles($path, $level = "debug")
 * @method static void useDailyFiles($path, $days = 0, $level = "debug")
 * @method static \Psr\Log\LoggerInterface useSyslog($name = "laravel", $level = "debug")
 * @method static void useErrorLog($level = "debug", $messageType = \Monolog\Handler\ErrorLogHandler::OPERATING_SYSTEM)
 * @method static void listen(\Closure $callback)
 * @method static \Monolog\Logger getMonolog()
 * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher)
 */
class Log extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'log';
    }
}
