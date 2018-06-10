<?php

namespace PointRed\LaravelDatabaseManagement\Helpers;

use Illuminate\Support\Facades\DB;

class DatabaseManagement {

    public static function getSize($databaseName, $connection = 'mysql') {
        config()->set('database.connections.'.$connection.'.database', $databaseName);

        $result = DB::select('SHOW TABLE STATUS');

        $dbSize = 0;

        foreach ($result as $row) {
            $dbSize += $row->Data_length + $row->Index_length;
        }

        return UnitConverter::convertAuto($dbSize);
    }
}