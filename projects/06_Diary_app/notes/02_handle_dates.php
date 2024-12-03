<?php

// Dates
/*
 * to get the time:
 *  - time() // unix timestamp => 1st quandary 1970 => numbers => 4bytes
 *  - microtime(true) => with micro seconds
 *      - you can use it to check the time opacity like
 *      => start = microtime(true) ;  // the code
 *      => end = microtime(true);
 *      => then echo $end - $start to get the result
 *
 *  - mktime(hours, minutes, seconds, months, day, years )
 *      => you should pass the values
 *
 * to set the time zone
 *  - date_default_timezone_set();
 *      => 'America/New_York'
 *
 * to get the current date
 *  - date('')
 *      => 'Y-m-d H:i:s'
 *  - try this date('Y-m-d H:i:s', time());
 *  - search about that to custom format
 *      => DateTimeInterface::format() format
 *
 *
 * to turn time to time stamp
 *  - strtotime()
 *  =>
 */



// change the date format date  in our project:
/*
 * - turn the date come form the database value  into timestamp
 *   use strtotime
 *
 * - then turn it into date with the new format
 */
