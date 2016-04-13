<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Contracts\Bus\Dispatcher 
 * @method static mixed dispatch($command)
 * @method static mixed dispatchNow($command)
 * @method static pipeThrough(array $pipes)
 */
class Bus extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Illuminate\Contracts\Bus\Dispatcher';
    }
}
