<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Database\DatabaseManager 
 * @method static \Illuminate\Database\Connection connection($name = null)
 * @method static void purge($name = null)
 * @method static void disconnect($name = null)
 * @method static \Illuminate\Database\Connection|void reconnect($name = null)
 * @method static string getDefaultConnection()
 * @method static void setDefaultConnection($name)
 * @method static array supportedDrivers()
 * @method static array availableDrivers()
 * @method static void extend($name, callable $resolver)
 * @method static array getConnections()
 * @see \Illuminate\Database\Connection 
 * @method static void useDefaultQueryGrammar()
 * @method static void useDefaultSchemaGrammar()
 * @method static void useDefaultPostProcessor()
 * @method static \Illuminate\Database\Schema\Builder getSchemaBuilder()
 * @method static \Illuminate\Database\Query\Builder table($table)
 * @method static \Illuminate\Database\Query\Builder query()
 * @method static \Illuminate\Database\Query\Expression raw($value)
 * @method static mixed selectOne($query, $bindings = [])
 * @method static array selectFromWriteConnection($query, $bindings = [])
 * @method static array select($query, $bindings = [], $useReadPdo = true)
 * @method static bool insert($query, $bindings = [])
 * @method static int update($query, $bindings = [])
 * @method static int delete($query, $bindings = [])
 * @method static bool statement($query, $bindings = [])
 * @method static int affectingStatement($query, $bindings = [])
 * @method static bool unprepared($query)
 * @method static array prepareBindings(array $bindings)
 * @method static mixed transaction(\Closure $callback)
 * @method static void beginTransaction()
 * @method static void commit()
 * @method static void rollBack()
 * @method static int transactionLevel()
 * @method static array pretend(\Closure $callback)
 * @method static void logQuery($query, $bindings, $time = null)
 * @method static void listen(\Closure $callback)
 * @method static bool isDoctrineAvailable()
 * @method static \Doctrine\DBAL\Schema\Column getDoctrineColumn($table, $column)
 * @method static \Doctrine\DBAL\Schema\AbstractSchemaManager getDoctrineSchemaManager()
 * @method static \Doctrine\DBAL\Connection getDoctrineConnection()
 * @method static \PDO getPdo()
 * @method static \PDO getReadPdo()
 * @method static setPdo($pdo)
 * @method static setReadPdo($pdo)
 * @method static setReconnector(callable $reconnector)
 * @method static string getName()
 * @method static mixed getConfig($option)
 * @method static string getDriverName()
 * @method static \Illuminate\Database\Query\Grammars\Grammar getQueryGrammar()
 * @method static void setQueryGrammar(\Illuminate\Database\Query\Grammars\Grammar $grammar)
 * @method static \Illuminate\Database\Schema\Grammars\Grammar getSchemaGrammar()
 * @method static void setSchemaGrammar(\Illuminate\Database\Schema\Grammars\Grammar $grammar)
 * @method static \Illuminate\Database\Query\Processors\Processor getPostProcessor()
 * @method static void setPostProcessor(\Illuminate\Database\Query\Processors\Processor $processor)
 * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static bool pretending()
 * @method static int getFetchMode()
 * @method static mixed getFetchArgument()
 * @method static array getFetchConstructorArgument()
 * @method static int setFetchMode($fetchMode, $fetchArgument = null, array $fetchConstructorArgument = [])
 * @method static array getQueryLog()
 * @method static void flushQueryLog()
 * @method static void enableQueryLog()
 * @method static void disableQueryLog()
 * @method static bool logging()
 * @method static string getDatabaseName()
 * @method static string setDatabaseName($database)
 * @method static string getTablePrefix()
 * @method static void setTablePrefix($prefix)
 * @method static \Illuminate\Database\Grammar withTablePrefix(\Illuminate\Database\Grammar $grammar)
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}
