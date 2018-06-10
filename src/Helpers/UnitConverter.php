<?php

namespace PointRed\LaravelDatabaseManagement\Helpers;

class UnitConverter {

    /**
     * Convert Bytes to another unit
     *
     * @param        $size
     * @param string $unitInput
     * @param        $unitOutput
     * @param bool   $displayUnit
     *
     * @return string
     */
    public static function convert($size, $unitInput = 'B', $unitOutput = 'MB') {
        $units = array( 'B', 'KB', 'MB', 'GB', 'TB');

        $unitInputIndex = self::getUnitIndex($units, $unitInput);

        $unitOutputIndex = self::getUnitIndex($units, $unitOutput, count($units));

        $unitPower = $unitOutputIndex - $unitInputIndex;

        $result = $size / pow(1024, $unitPower);

        return $result;
    }

    /**
     * Convert Bytes to another unit
     *
     * @param        $size
     * @param string $unitInput
     * @param        $unitOutput
     * @param bool   $displayUnit
     *
     * @return string
     */
    public static function convertAuto($size, $unitInput = 'B') {
        $units = array( 'B', 'KB', 'MB', 'GB', 'TB');
        $unitPower = $size > 0 ? floor(log($size, 1024)) : 0;

        if ($unitInput !== 'B') {
            $size = self::convert($size, $unitInput, 'B');
        }

        $result = $size / pow(1024, $unitPower);

        return $result.' '.$units[$unitPower];
    }

    private static function getUnitIndex($units, $unit, $default = 0) {
        for ($i = 0; $i < count($units); $i++) {
            if ($units[$i] === $unit) {
                return $i;
            }
        }

        return $default;
    }
}
