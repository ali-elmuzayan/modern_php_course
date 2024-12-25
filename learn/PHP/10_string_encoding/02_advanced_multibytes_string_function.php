<?php
//
/*
 * in the overview lesson we learn about the mb_strlen and mb_substr
 *
 * here we are going to learn about:
 *  - mb_strtoupper
 *     to turn the upper cases
 *
 *  - mb_strtolower:
 *     to turn the character to lower case
 *
 *  - mb_strpos:
 *     return the position of character
 *
 *  - mb_str_split:
 *     will split the character to use it with emoji and see what happen
 *
 *  - mb_ord(''):
 *     will return the corresponding number => Unicode number
 *
 */


// header('Content-Type: text/plain');

$germanUmlaut = 'öäüß';
$singapore = '新加坡共和国';
$sofiaInBulgaria = 'София';
$bangkok = 'กรุงเทพมหานคร';
$emoji = '🧑🏾';

var_dump(mb_strlen($singapore));
var_dump(mb_substr($singapore, 0, 1));
var_dump(strtoupper($germanUmlaut));
var_dump(mb_strtoupper($germanUmlaut));
var_dump(mb_strtolower($germanUmlaut));
var_dump(strpos($bangkok, 'พ'));
var_dump(mb_strpos($bangkok, 'พ'));
var_dump(mb_str_split($emoji));
var_dump(mb_str_split($singapore));

var_dump(mb_ord('新'));
var_dump(mb_chr(26032));

echo '&#26032;';