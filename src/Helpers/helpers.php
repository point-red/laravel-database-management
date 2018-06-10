<?php

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
        return \PointRed\LaravelDatabaseManagement\Helpers\DatabaseManagement::getSize($databaseName, $connection);
    }
}
