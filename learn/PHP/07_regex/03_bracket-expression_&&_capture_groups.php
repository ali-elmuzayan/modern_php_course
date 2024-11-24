<?php
// Bracket Expression: Craft Custom Character sets and ranges
/*
 * We can build a character class ourselves (bracket expression):
 *  - [abc]: A character that is either "a", "b" or"c"
 *  - [a-c]: A character in the range "a" to "c" (in Unicode)
 *  - [ABC]: A character that is either "A", "B" or "c"
 *  - [A-Za-z0-9]: A character which is between A-Z, a-z or 0.9
 *  - [A-za-z\d]: A character between A-Z, a-z, or one that is a digit
 *  - [A-Za-z0-9!]: A character which is between A-Z, a-z, 0.9, or and "!"
 *  - [!?_]: A character that is either a "!", "?", or "_"
 *  - [^A-Z]: A character which is not between A and Z
 */

$message = 'Happy 23th Birthday!';

var_dump(preg_match('/[0-9]{2} ?[a-z]{2}/', $message, $matches));
var_dump($matches);
echo '<hr>';

// all the word that start with uppercase
var_dump(preg_match_all('/[A-Z]\w*/', $message, $matches));
var_dump($matches);
echo '<hr>';

// only special character and any different char
var_dump(preg_match_all('/[^a-zA-Z0-9 ]/', $message, $matches));
var_dump($matches);
echo '<hr>';


// Capture Groups: Extract Structured Data Elements;
/*
 * We can use the round brackets to creat a capture group
 * ([a-z]*)
 * The result of this will then also get returned as a match
 * We can then access the result separately!
 *
 * by using array we will get multiple value for each
 *  - first one for whole match and the other for the capture group
 *
 *
 * Note:
 *  - some words might take 2bytes which will show a problem like the
 *    euro sign to solve that use add "/u" at the end
 *    and use header('charset=utf-8')
 */

$message = 'The hotel costs $ 250.00, and the flight is $ 150.00. And this number is just annoying: 123.00';
var_dump(preg_match_all('/\$? ?([0-9]+.?[0-9]*)/', $message, $matches));
var_dump($matches);
echo '<hr>';