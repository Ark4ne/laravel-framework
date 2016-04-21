<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Contracts\Auth\Access\Gate 
 * @method static bool has($ability)
 * @method static define($ability, $callback)
 * @method static policy($class, $policy)
 * @method static before(callable $callback)
 * @method static bool allows($ability, $arguments = [])
 * @method static bool denies($ability, $arguments = [])
 * @method static bool check($ability, $arguments = [])
 * @method static forUser($user)
 */
class Gate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Illuminate\Contracts\Auth\Access\Gate';
    }
}
