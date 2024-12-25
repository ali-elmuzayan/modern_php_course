<?php

// convert non UTF-8 strings with 'mb_convert_encoding'
/*
 * NOte:
 * 1) the file we get its contents is not saved with utf-8
 * 2) before UTF-8, we had a lot of different encoding all over the world
 *
 *
 *
 * when is this is important for you
 *  - imagine you had a lot of text files, maybe an export of data from
 *    a legacy system
 *    => this will save you from a debugging effort
 */


header('Content-Type: text/text; charset=utf-8');

$file = file_get_contents(__DIR__ . '/05-convert-encoding.txt');
echo 'before converting: ' . $file;
echo "\n";
echo 'after converting:  ';
echo mb_convert_encoding($file, 'utf-8', 'iso-8859-1');