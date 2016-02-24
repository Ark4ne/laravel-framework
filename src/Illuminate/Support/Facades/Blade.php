<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\View\Compilers\BladeCompiler
 * @method static void compile($path = null)
 * @method static string getPath()
 * @method static void setPath($path)
 * @method static string compileString($value)
 * @method static string compileEchoDefaults($value)
 * @method static array getExtensions()
 * @method static void extend(callable $compiler)
 * @method static void directive($name, callable $handler)
 * @method static array getCustomDirectives()
 * @method static array getRawTags()
 * @method static void setRawTags($openTag, $closeTag)
 * @method static void setContentTags($openTag, $closeTag, $escaped = false)
 * @method static void setEscapedContentTags($openTag, $closeTag)
 * @method static string getContentTags()
 * @method static string getEscapedContentTags()
 * @method static void setEchoFormat($format)
 * @method static string getCompiledPath($path)
 * @method static bool isExpired($path)
 */
class Blade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['view']->getEngineResolver()->resolve('blade')->getCompiler();
    }
}
