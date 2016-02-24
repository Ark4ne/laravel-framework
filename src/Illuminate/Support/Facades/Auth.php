<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Auth\AuthManager
 * @method static \Illuminate\Contracts\Auth\Guard guard($name = null)
 * @method static \Illuminate\Auth\SessionGuard createSessionDriver($name, $config)
 * @method static \Illuminate\Auth\TokenGuard createTokenDriver($name, $config)
 * @method static string getDefaultDriver()
 * @method static void shouldUse($name)
 * @method static void setDefaultDriver($name)
 * @method static viaRequest($driver, callable $callback)
 * @method static \Closure userResolver()
 * @method static resolveUsersUsing(\Closure $userResolver)
 * @method static extend($driver, \Closure $callback)
 * @method static provider($name, \Closure $callback)
 * @method static \Illuminate\Contracts\Auth\UserProvider createUserProvider($provider)
 * @see \Illuminate\Contracts\Auth\Factory
 * @see \Illuminate\Contracts\Auth\Guard
 * @see \Illuminate\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }
}
