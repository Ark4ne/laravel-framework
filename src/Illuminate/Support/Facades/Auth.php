<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Auth\AuthManager 
 * @method static \Illuminate\Contracts\Auth\Guard|mixed guard($name = null)
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
 * @method static bool check()
 * @method static bool guest()
 * @method static \Illuminate\Contracts\Auth\Authenticatable user()
 * @method static int id()
 * @method static bool validate(array $credentials = [])
 * @method static void setUser(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @see \Illuminate\Contracts\Auth\StatefulGuard 
 * @method static bool attempt(array $credentials = [], $remember = false, $login = true)
 * @method static bool once(array $credentials = [])
 * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, $remember = false)
 * @method static \Illuminate\Contracts\Auth\Authenticatable loginUsingId($id, $remember = false)
 * @method static bool onceUsingId($id)
 * @method static bool viaRemember()
 * @method static void logout()
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
