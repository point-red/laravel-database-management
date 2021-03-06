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

if (! function_exists('dbm_get_data')) {
    /**
     * Get rows of table
     *
     * @param $databaseName
     * @param $tableName
     * @param string $connection
     * @return array
     */
    function dbm_get_data($databaseName, $tableName, $connection = 'mysql')
    {
        return DatabaseManagement::getData($databaseName, $tableName, $connection);
    }
}
