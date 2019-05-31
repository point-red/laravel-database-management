<?php

use PointRed\LaravelDatabaseManagement\Helpers\DatabaseManagement;

if (! function_exists('dbm_get_size')) {
    /**
     * Get database size
     *
     * @param        $databaseName
     * @param string $connection
     *
     * @return float
     */
    function dbm_get_size($databaseName, $connection = 'mysql')
    {
        return DatabaseManagement::getSize($databaseName, $connection);
    }
}

if (! function_exists('dbm_get_tables')) {
    /**
     * Get database size
     *
     * @param        $databaseName
     * @param string $connection
     * @return array
     */
    function dbm_get_tables($databaseName, $connection = 'mysql')
    {
        return DatabaseManagement::getTables($databaseName, $connection);
    }
}
