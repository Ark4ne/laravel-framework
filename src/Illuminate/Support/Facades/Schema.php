<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Database\Schema\Builder
 * @method static bool hasTable($table)
 * @method static bool hasColumn($table, $column)
 * @method static bool hasColumns($table, array $columns)
 * @method static string getColumnType($table, $column)
 * @method static array getColumnListing($table)
 * @method static \Illuminate\Database\Schema\Blueprint table($table, \Closure $callback)
 * @method static \Illuminate\Database\Schema\Blueprint create($table, \Closure $callback)
 * @method static \Illuminate\Database\Schema\Blueprint drop($table)
 * @method static \Illuminate\Database\Schema\Blueprint dropIfExists($table)
 * @method static \Illuminate\Database\Schema\Blueprint rename($from, $to)
 * @method static \Illuminate\Database\Connection getConnection()
 * @method static setConnection(\Illuminate\Database\Connection $connection)
 * @method static void blueprintResolver(\Closure $resolver)
 */
class Schema extends Facade
{
    /**
     * Get a schema builder instance for a connection.
     *
     * @param  string  $name
     * @return \Illuminate\Database\Schema\Builder
     */
    public static function connection($name)
    {
        return static::$app['db']->connection($name)->getSchemaBuilder();
    }

    /**
     * Get a schema builder instance for the default connection.
     *
     * @return \Illuminate\Database\Schema\Builder
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['db']->connection()->getSchemaBuilder();
    }
}
