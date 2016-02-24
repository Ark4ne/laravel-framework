<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Routing\UrlGenerator
 * @method static string full()
 * @method static string current()
 * @method static string previous()
 * @method static string to($path, $extra = [], $secure = null)
 * @method static string secure($path, $parameters = [])
 * @method static string asset($path, $secure = null)
 * @method static string assetFrom($root, $path, $secure = null)
 * @method static string secureAsset($path)
 * @method static void forceSchema($schema)
 * @method static string route($name, $parameters = [], $absolute = true)
 * @method static string action($action, $parameters = [], $absolute = true)
 * @method static void forceRootUrl($root)
 * @method static bool isValidUrl($path)
 * @method static \Illuminate\Http\Request getRequest()
 * @method static void setRequest(\Illuminate\Http\Request $request)
 * @method static setRoutes(\Illuminate\Routing\RouteCollection $routes)
 * @method static setSessionResolver(callable $sessionResolver)
 * @method static setRootControllerNamespace($rootNamespace)
 */
class URL extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'url';
    }
}
