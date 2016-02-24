<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Mail\Mailer
 * @method static void alwaysFrom($address, $name = null)
 * @method static void alwaysTo($address, $name = null)
 * @method static void raw($text, $callback)
 * @method static void plain($view, array $data, $callback)
 * @method static void send($view, array $data, $callback)
 * @method static mixed queue($view, array $data, $callback, $queue = null)
 * @method static mixed onQueue($queue, $view, array $data, $callback)
 * @method static mixed queueOn($queue, $view, array $data, $callback)
 * @method static mixed later($delay, $view, array $data, $callback, $queue = null)
 * @method static mixed laterOn($queue, $delay, $view, array $data, $callback)
 * @method static void handleQueuedMessage($job, $data)
 * @method static \Illuminate\Contracts\View\Factory getViewFactory()
 * @method static \Swift_Mailer getSwiftMailer()
 * @method static array failures()
 * @method static void setSwiftMailer($swift)
 * @method static setQueue(\Illuminate\Contracts\Queue\Queue $queue)
 * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
 */
class Mail extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mailer';
    }
}
