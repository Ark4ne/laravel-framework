<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Routing\Redirector
 * @method static \Illuminate\Http\RedirectResponse home($status = 302)
 * @method static \Illuminate\Http\RedirectResponse back($status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse refresh($status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse guest($path, $status = 302, $headers = [], $secure = null)
 * @method static \Illuminate\Http\RedirectResponse intended($default = "\/", $status = 302, $headers = [], $secure = null)
 * @method static \Illuminate\Http\RedirectResponse to($path, $status = 302, $headers = [], $secure = null)
 * @method static \Illuminate\Http\RedirectResponse away($path, $status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse secure($path, $status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse route($route, $parameters = [], $status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse action($action, $parameters = [], $status = 302, $headers = [])
 * @method static \Illuminate\Routing\UrlGenerator getUrlGenerator()
 * @method static void setSession(\Illuminate\Session\Store $session)
 */
class Redirect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redirect';
    }
}
