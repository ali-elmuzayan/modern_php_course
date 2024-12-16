<?php
// to access a specific argument of the function
/*
 * - lets say we have this function
 *   function print_5x($str = 'hello', $times = 5) {}
 * - and you want to access times directly without giving the str
 *   print_5x(times: 3)
 * - or you can handle the time first then the str
 *   print_5x(times: 3, str: 'hello everyone');
 *
 * this feature available:
 *  - since PHP 8
 *
 */


function print_5x($str = 'hello everyone', $times = 5): void
{
    for ($i = 0; $i < $times; $i++) {
        echo $str . '<br>';
    }
}

print_5x(times: 4);

print_5x(times: 7, str: 'hello everyone)');