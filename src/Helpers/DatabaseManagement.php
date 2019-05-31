<?php

namespace PointRed\LaravelDatabaseManagement\Helpers;

use Illuminate\Support\Facades\DB;

class DatabaseManagement {

    public static function getSize($databaseName, $connection = 'mysql') {
        config()->set('database.connections.'.$connection.'.database', $databaseName);

        $result = DB::connection($connection)->select('SHOW TABLE STATUS');

        $dbSize = 0;

        foreach ($result as $row) {
            $dbSize += $row->Data_length + $row->Index_length;
        }

        return UnitConverter::convertAuto($dbSize);
    }

    public static function getTables($databaseName, $connection = 'mysql') {
        config()->set('database.connections.'.$connection.'.database', $databaseName);

        $result = DB::connection($connection)->select('SHOW TABLES');

        $result = array_column($result, 'Tables_in_' . $databaseName);

        return $result;
    }
}
