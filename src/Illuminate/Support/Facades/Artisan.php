<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Contracts\Console\Kernel 
 * @method static int handle($input, $output = null)
 * @method static int call($command, array $parameters = [])
 * @method static int queue($command, array $parameters = [])
 * @method static array all()
 * @method static string output()
 */
class Artisan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Illuminate\Contracts\Console\Kernel';
    }
}
