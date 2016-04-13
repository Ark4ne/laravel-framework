<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Hashing\BcryptHasher 
 * @method static string make($value, array $options = [])
 * @method static bool check($value, $hashedValue, array $options = [])
 * @method static bool needsRehash($hashedValue, array $options = [])
 * @method static setRounds($rounds)
 */
class Hash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
