<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Routing\Router 
 * @method static \Illuminate\Routing\Route get($uri, $action = null)
 * @method static \Illuminate\Routing\Route post($uri, $action = null)
 * @method static \Illuminate\Routing\Route put($uri, $action = null)
 * @method static \Illuminate\Routing\Route patch($uri, $action = null)
 * @method static \Illuminate\Routing\Route delete($uri, $action = null)
 * @method static \Illuminate\Routing\Route options($uri, $action = null)
 * @method static \Illuminate\Routing\Route any($uri, $action = null)
 * @method static \Illuminate\Routing\Route match($methods, $uri, $action = null)
 * @method static void resources(array $resources)
 * @method static void resource($name, $controller, array $options = [])
 * @method static void auth()
 * @method static void group(array $attributes, \Closure $callback)
 * @method static array mergeWithLastGroup($new)
 * @method static string getLastGroupPrefix()
 * @method static \Illuminate\Http\Response dispatch(\Illuminate\Http\Request $request)
 * @method static mixed dispatchToRoute(\Illuminate\Http\Request $request)
 * @method static array gatherRouteMiddlewares(\Illuminate\Routing\Route $route)
 * @method static string resolveMiddlewareClassName($name)
 * @method static void matched($callback)
 * @method static array getMiddleware()
 * @method static middleware($name, $class)
 * @method static middlewareGroup($name, array $middleware)
 * @method static prependMiddlewareToGroup($group, $middleware)
 * @method static pushMiddlewareToGroup($group, $middleware)
 * @method static void model($key, $class, \Closure $callback = null)
 * @method static void bind($key, $binder)
 * @method static \Closure createClassBinding($binding)
 * @method static void pattern($key, $pattern)
 * @method static void patterns($patterns)
 * @method static \Illuminate\Http\Response prepareResponse($request, $response)
 * @method static bool hasGroupStack()
 * @method static array getGroupStack()
 * @method static mixed input($key, $default = null)
 * @method static \Illuminate\Routing\Route getCurrentRoute()
 * @method static \Illuminate\Routing\Route current()
 * @method static bool has($name)
 * @method static string currentRouteName()
 * @method static bool is()
 * @method static bool currentRouteNamed($name)
 * @method static string currentRouteAction()
 * @method static bool uses()
 * @method static bool currentRouteUses($action)
 * @method static \Illuminate\Http\Request getCurrentRequest()
 * @method static \Illuminate\Routing\RouteCollection getRoutes()
 * @method static void setRoutes(\Illuminate\Routing\RouteCollection $routes)
 * @method static array getPatterns()
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
