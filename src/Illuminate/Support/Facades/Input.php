<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Http\Request 
 * @method static instance()
 * @method static string method()
 * @method static string root()
 * @method static string url()
 * @method static string fullUrl()
 * @method static string fullUrlWithQuery(array $query)
 * @method static string path()
 * @method static string decodedPath()
 * @method static string segment($index, $default = null)
 * @method static array segments()
 * @method static bool is()
 * @method static bool fullUrlIs()
 * @method static bool ajax()
 * @method static bool pjax()
 * @method static bool secure()
 * @method static string ip()
 * @method static array ips()
 * @method static bool exists($key)
 * @method static bool has($key)
 * @method static array all()
 * @method static string input($key = null, $default = null)
 * @method static array only($keys)
 * @method static array except($keys)
 * @method static string query($key = null, $default = null)
 * @method static bool hasCookie($key)
 * @method static string cookie($key = null, $default = null)
 * @method static array allFiles()
 * @method static \Symfony\Component\HttpFoundation\File\UploadedFile file($key = null, $default = null)
 * @method static bool hasFile($key)
 * @method static string header($key = null, $default = null)
 * @method static string server($key = null, $default = null)
 * @method static string old($key = null, $default = null)
 * @method static void flash($filter = null, $keys = [])
 * @method static void flashOnly($keys)
 * @method static void flashExcept($keys)
 * @method static void flush()
 * @method static void merge(array $input)
 * @method static void replace(array $input)
 * @method static mixed json($key = null, $default = null)
 * @method static bool isJson()
 * @method static bool wantsJson()
 * @method static bool accepts($contentTypes)
 * @method static string prefers($contentTypes)
 * @method static bool acceptsJson()
 * @method static bool acceptsHtml()
 * @method static string format($default = "html")
 * @method static string bearerToken()
 * @method static duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)
 * @method static \Illuminate\Session\Store session()
 * @method static mixed user($guard = null)
 * @method static \Illuminate\Routing\Route route($param = null)
 * @method static string fingerprint()
 * @method static \Closure getUserResolver()
 * @method static setUserResolver(\Closure $callback)
 * @method static \Closure getRouteResolver()
 * @method static setRouteResolver(\Closure $callback)
 * @method static array toArray()
 * @method static bool offsetExists($offset)
 * @method static mixed offsetGet($offset)
 * @method static void offsetSet($offset, $value)
 * @method static void offsetUnset($offset)
 * @method static initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null)
 * @method static overrideGlobals()
 * @method static SessionInterface getSession()
 * @method static bool hasPreviousSession()
 * @method static bool hasSession()
 * @method static setSession(\Symfony\Component\HttpFoundation\Session\SessionInterface $session)
 * @method static array getClientIps()
 * @method static string getClientIp()
 * @method static string getScriptName()
 * @method static string getPathInfo()
 * @method static string getBasePath()
 * @method static string getBaseUrl()
 * @method static string getScheme()
 * @method static string getPort()
 * @method static string getUser()
 * @method static string getPassword()
 * @method static string getUserInfo()
 * @method static string getHttpHost()
 * @method static string getRequestUri()
 * @method static string getSchemeAndHttpHost()
 * @method static string getUri()
 * @method static string getUriForPath($path)
 * @method static string getRelativeUriForPath($path)
 * @method static string getQueryString()
 * @method static bool isSecure()
 * @method static string getHost()
 * @method static setMethod($method)
 * @method static string getMethod()
 * @method static string getRealMethod()
 * @method static string getMimeType($format)
 * @method static string getFormat($mimeType)
 * @method static setFormat($format, $mimeTypes)
 * @method static string getRequestFormat($default = "html")
 * @method static setRequestFormat($format)
 * @method static string getContentType()
 * @method static setDefaultLocale($locale)
 * @method static string getDefaultLocale()
 * @method static setLocale($locale)
 * @method static string getLocale()
 * @method static bool isMethod($method)
 * @method static bool isMethodSafe()
 * @method static string getContent($asResource = false)
 * @method static array getETags()
 * @method static bool isNoCache()
 * @method static string getPreferredLanguage(array $locales = null)
 * @method static array getLanguages()
 * @method static array getCharsets()
 * @method static array getEncodings()
 * @method static array getAcceptableContentTypes()
 * @method static bool isXmlHttpRequest()
 */
class Input extends Facade
{
    /**
     * Get an item from the input data.
     *
     * This method is used for all request verbs (GET, POST, PUT, and DELETE)
     *
     * @param  string $key
     * @param  mixed  $default
     *
     * @return mixed
     */
    public static function get($key = null, $default = null)
    {
        return static::$app['request']->input($key, $default);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'request';
    }
}
