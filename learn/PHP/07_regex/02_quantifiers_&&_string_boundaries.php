<?php
// Quantifiers: Control repetitions for powerful pattern matching
/*
 * Quantifier:
 *  - Quantifiers allow us to specify how ofter the character (or character
 *    class) in front of it should be repeated.
 *
 * What Quantifier can we use?
 *  - *     => 0 to any number of times
 *  - +     => 1 time to any number of times
 *  - ?     => the character (or class char) is optional (means: 0 or 1 time);
 *  - {n}   => Exactly n times
 *  - {n,}  => At least n times
 *  - {n,m} => n to m times
 */

$message = 'Happy 23th Birthday!';

var_dump(preg_match('/\d\d*/', $message, $matches));
var_dump($matches);
echo '<hr>';

// any digit => 3 th or 3th;
var_dump(preg_match('/\d+ ?th/', $message, $matches));
var_dump($matches);
echo '<hr>';

// word exactly 5 times
var_dump(preg_match('/\w{5}/', $message, $matches));
var_dump($matches);
echo '<hr>';


// The `^` & `$` Anchors: Define String Boundaries
/*
 * There are now 2 more important signs:
 *  - ^  => This is the start position of the string
 *  - $ => This is the end of the string
 * Example:
 *  - /^H/ => This will match all"H", that are at the beginning of the string
 *
 */

var_dump(preg_match('/^h/', $message, $matches));
var_dump(preg_match('/^H/', $message, $matches));
echo '<hr>';
// test for email
var_dump(preg_match('/^.+@.+\..+$/', 'admin@gmail.com'));


