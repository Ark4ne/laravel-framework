<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\View\Factory 
 * @method static \Illuminate\Contracts\View\View file($path, $data = [], $mergeData = [])
 * @method static \Illuminate\Contracts\View\View make($view, $data = [], $mergeData = [])
 * @method static \Illuminate\Contracts\View\View of($view, $data = [])
 * @method static void name($view, $name)
 * @method static void alias($view, $alias)
 * @method static bool exists($view)
 * @method static string renderEach($view, $data, $iterator, $empty = "raw|")
 * @method static \Illuminate\View\Engines\EngineInterface getEngineFromPath($path)
 * @method static mixed share($key, $value = null)
 * @method static array creator($views, $callback)
 * @method static array composers(array $composers)
 * @method static array composer($views, $callback, $priority = null)
 * @method static void callComposer(\Illuminate\View\View $view)
 * @method static void callCreator(\Illuminate\View\View $view)
 * @method static void startSection($section, $content = "")
 * @method static void inject($section, $content)
 * @method static string yieldSection()
 * @method static string stopSection($overwrite = false)
 * @method static string appendSection()
 * @method static string yieldContent($section, $default = "")
 * @method static void flushSections()
 * @method static void flushSectionsIfDoneRendering()
 * @method static void incrementRender()
 * @method static void decrementRender()
 * @method static bool doneRendering()
 * @method static void addLocation($location)
 * @method static void addNamespace($namespace, $hints)
 * @method static void prependNamespace($namespace, $hints)
 * @method static void addExtension($extension, $engine, $resolver = null)
 * @method static array getExtensions()
 * @method static \Illuminate\View\Engines\EngineResolver getEngineResolver()
 * @method static \Illuminate\View\ViewFinderInterface getFinder()
 * @method static void setFinder(\Illuminate\View\ViewFinderInterface $finder)
 * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
 * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static \Illuminate\Contracts\Container\Container getContainer()
 * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
 * @method static mixed shared($key, $default = null)
 * @method static array getShared()
 * @method static bool hasSection($name)
 * @method static array getSections()
 * @method static array getNames()
 */
class View extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}
