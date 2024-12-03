<?php
// What are regular expression:
/*
 * Regular expressions help you to evaluate the contents of strings
 * Or to find parts within a string
 *
 * PHP regex functions:
 *  - PHP offers several functions to work with regular expressions
 *  - The most common ones:
 *      - preg_match: With this we can check if a string matches a regular
 *        expression
 *      - preg_match_all:
 *      - preg_replace: like str_replace - but it uses a regular expression
 *
 * What is the problem that regular expression solve:
 *  - check emails
 *  - check phones number
 *  - check passwords
 *  - replace content or chars
 *  - locking for multiple files using glob(*);
 */


// Search Patterns in strings:
/*
 * 1- for example look at number in
 *
 * Note:
 *  - you should add slashes at the beginning and at the end
 *    that mean here the regular expression start here and end there
 *     => '/30/'
 *  - Character classes :
 *      - \d => any decimal digit
 *      - \D => any character that is not a decimal digit
 *      - \s => any White space character
 *      - \w => any "word" character (with word we mean also decimal)
 *      - \W => any "non-word" character
 */
$message = 'Happy 23th birthday! ';

var_dump(preg_match('/\d/', $message));
echo '<hr>';
// will search for the first value that met 10 => infinite
preg_match('/\d\d/', $message, $match);
var_dump($match);
echo '<hr>';

// will search for all the value that match
preg_match_all('/\d\d/', $message, $match);
var_dump($match);
echo '<hr>';

preg_match('/\d\d\w\w/', $message, $match);
var_dump($match);
echo '<hr>';


