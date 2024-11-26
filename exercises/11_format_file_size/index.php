<?php
// Exercise: handle file size;
function format_filesize($size)
{
    if ($size < 1024) {
        return $size . ' bytes';
    }
    $size /= 1024;
    if ($size < 1024) {
        // KB
        return round($size, 2) . ' kb';
    }
    $size /= 1024;
    if ($size < 1024) {

        return round($size, 2) . ' MB';
    }
    $size /= 1024;
    return round($size, 2) . ' GB';

}


var_dump(format_filesize(10));
var_dump(format_filesize(10000));