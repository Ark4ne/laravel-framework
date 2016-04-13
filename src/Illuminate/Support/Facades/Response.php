<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Contracts\Routing\ResponseFactory 
 * @method static \Illuminate\Http\Response make($content = "", $status = 200, array $headers = [])
 * @method static \Illuminate\Http\Response view($view, $data = [], $status = 200, array $headers = [])
 * @method static \Illuminate\Http\JsonResponse json($data = [], $status = 200, array $headers = [], $options = 0)
 * @method static \Illuminate\Http\JsonResponse jsonp($callback, $data = [], $status = 200, array $headers = [], $options = 0)
 * @method static \Symfony\Component\HttpFoundation\StreamedResponse stream($callback, $status = 200, array $headers = [])
 * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse download($file, $name = null, array $headers = [], $disposition = "attachment")
 * @method static \Illuminate\Http\RedirectResponse redirectTo($path, $status = 302, $headers = [], $secure = null)
 * @method static \Illuminate\Http\RedirectResponse redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse redirectToAction($action, $parameters = [], $status = 302, $headers = [])
 * @method static \Illuminate\Http\RedirectResponse redirectGuest($path, $status = 302, $headers = [], $secure = null)
 * @method static \Illuminate\Http\RedirectResponse redirectToIntended($default = "\/", $status = 302, $headers = [], $secure = null)
/", $status = 302, $headers = [], $secure = null)
/", $status = 302, $headers = [], $secure = null)
/", $status = 302, $headers = [], $secure = null)
/", $status = 302, $headers = [], $secure = null)
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Illuminate\Contracts\Routing\ResponseFactory';
    }
}
