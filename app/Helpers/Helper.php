<?php

namespace App\Helpers;
use App\Models\Publication;
use App\Models\File;
use Request;

class Helper {

    /**
     * Get the Current Url and Compare to segment
     *
     * @param string $uri
     * @return string
     */

    public static function activeMenu($uri = '')
    {
        $active = '';
        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }

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

    /**
     * Count the number of uploaded publications
     *
     * @return integer
     */
    public static function numberOfPublications()
    {
        return Publication::get()->count();
    }

    /**
     * Count the number of uploaded files
     *
     * @return integer
     */
    public static function numberOfFiles()
    {
        return File::get()->count();
    }

    /**
     * Get the sum of all uploaded files
     *
     * @return integer
     */
    public static function sumOfFiles()
    {
        return File::get()->sum('size');
    }
}