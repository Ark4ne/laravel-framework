<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Events\Dispatcher
 * @method static void listen($events, $listener, $priority = 0)
 * @method static bool hasListeners($eventName)
 * @method static void push($event, $payload = [])
 * @method static void subscribe($subscriber)
 * @method static mixed until($event, $payload = [])
 * @method static void flush($event)
 * @method static string firing()
 * @method static array fire($event, $payload = [], $halt = false)
 * @method static array getListeners($eventName)
 * @method static mixed makeListener($listener)
 * @method static \Closure createClassListener($listener)
 * @method static void forget($event)
 * @method static void forgetPushed()
 * @method static setQueueResolver(callable $resolver)
 */
class Event extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'events';
    }
}
