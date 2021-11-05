<?php

namespace App\Helpers;

class Helper {

    /**
     * Format bytes to kb, mb, gb, tb, pb
     *
     * @param  integer $size
     * @param  integer $precision
     * @return integer
     */
    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 1) . ' ' . $units[$i];
    }
}