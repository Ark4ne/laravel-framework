<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Encryption\Encrypter 
 * @method static string encrypt($value)
 * @method static string decrypt($payload)
 */
class Crypt extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'encrypter';
    }
}
