<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Filesystem\FilesystemManager
 * @method static \Illuminate\Contracts\Filesystem\Filesystem drive($name = null)
 * @method static \Illuminate\Contracts\Filesystem\Filesystem disk($name = null)
 * @method static \Illuminate\Contracts\Filesystem\Filesystem cloud()
 * @method static \Illuminate\Contracts\Filesystem\Filesystem createLocalDriver(array $config)
 * @method static \Illuminate\Contracts\Filesystem\Filesystem createFtpDriver(array $config)
 * @method static \Illuminate\Contracts\Filesystem\Cloud createS3Driver(array $config)
 * @method static \Illuminate\Contracts\Filesystem\Cloud createRackspaceDriver(array $config)
 * @method static string getDefaultDriver()
 * @method static string getDefaultCloudDriver()
 * @method static extend($driver, \Closure $callback)
 */
class Storage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filesystem';
    }
}
