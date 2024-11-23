<?php

// json decode
/*
 * we use file_get_contents => to get the content of json file
 *      - $content = file_get_content('index.json');
 *
 *  and we need to access this data
 * use json_encode to return it to array of arrays or array of objects
 *
 * json_encode($content
 *      - json_encode($content)        => return an array of objects
 *      - json_encode($content, true)  => return an array of arrays
 *
 */


// .bz2
/*
 * that mean the file we have has been compressed into bzip2
 *      => berlin.json.bz2
 *
 * bzdecompress() =>
 *      - use to decompress the bz code (string)
 *      - or you can use 'compress.bzip2://' __DIR__ . 'filepath';
 *
 *
 * Note:
 *      - when you have a big size data don't store it in multiple value
 *        while dealing with it this will take too many from the memory
 *      -you should check with phpinfo() that registered PHP streams
 *        contain compress.bzip2
 */


// we learned how to handle the error
/*
 * How:
 *      - first we declare the city and assign null value to it
 *      - then we checked if the value is declared in $_GET then assign
 *        the value to city
 *
 *      - if the value is null we will assign value otherwise shown the code
 */


// phpInfo() && filesize()
/*
 * phpinfo() =>
 *      will return the whole php configuration
 *
 * filesize() =>
 *      will return the size of file in kb
 */
