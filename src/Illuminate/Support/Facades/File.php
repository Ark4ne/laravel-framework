<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Filesystem\Filesystem 
 * @method static bool exists($path)
 * @method static string get($path)
 * @method static mixed getRequire($path)
 * @method static mixed requireOnce($file)
 * @method static int put($path, $contents, $lock = false)
 * @method static int prepend($path, $data)
 * @method static int append($path, $data)
 * @method static bool delete($paths)
 * @method static bool move($path, $target)
 * @method static bool copy($path, $target)
 * @method static string name($path)
 * @method static string extension($path)
 * @method static string type($path)
 * @method static string mimeType($path)
 * @method static int size($path)
 * @method static int lastModified($path)
 * @method static bool isDirectory($directory)
 * @method static bool isWritable($path)
 * @method static bool isFile($file)
 * @method static array glob($pattern, $flags = 0)
 * @method static array files($directory)
 * @method static array allFiles($directory)
 * @method static array directories($directory)
 * @method static bool makeDirectory($path, $mode = 493, $recursive = false, $force = false)
 * @method static bool copyDirectory($directory, $destination, $options = null)
 * @method static bool deleteDirectory($directory, $preserve = false)
 * @method static bool cleanDirectory($directory)
 */
class File extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'files';
    }
}
