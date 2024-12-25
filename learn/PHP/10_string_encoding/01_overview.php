<?php
// Unicode, UTF-8:
/*
 * In this section:
 *  - We'll have a look at how you can work with strings in different
 *    language
 *
 *  - This will cause unexpected behavior so far
 *
 *  - just as a few example
 *    => strlen => will count the number of bytes
 *    => mb_strlen => is the way to measure the length of unicode char if
 *       the char size is bigger than one byte.
 *
 *  - How can we account for this
 *    => in PHP, and in our Database
 *
 * Note:
 *  - emoji is combination of 2 character, so if you use mb_strlen
 *   so use
 *     - mb_substr(emoji, 0, 1)
 *     - mb_substr(emoji, 1, 1)
 *
 * When use What:
 *  - if you care about the number of bytes use strlen
 *  - if you need teh number of character with different language
 *    mb_strlen
 *
 * Bonus
 *  - symfony/string package
 *    => It provides an object-oriented API to strings and deals with
 *       bytes, UTF-8 code points and grapheme clusters in a unified way
 *    => using it could be a potential solution for more complex string
 *       problems
 */

header('Content-Type: text/plain');

$germanUmlaut = 'öäüß';
$singapore = '新加坡共和国';
$sofiaInBulgaria = 'София';
$bangkok = 'กรุงเทพมหานคร';
$emoji = '🧑🏾';

var_dump(mb_strlen('hello world'));
var_dump(mb_strlen($germanUmlaut));
var_dump(mb_strlen($bangkok));
var_dump(mb_strlen($emoji));

var_dump($emoji);
var_dump(mb_substr($emoji, 0, 1));
var_dump(mb_substr($emoji, 1, 1));