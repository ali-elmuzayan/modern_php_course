<?php
// overview: of the section
/*
 * - How to check the types of variables in PHP
 * - types casting with PHP (changing string to integer, ...)
 * - How to suppress warning messages
 * - include & file paths
 * - additional ways to include files (include_once, require, require_once)
 * - additional string functions
 * - what does an index.php do?
 */
echo '<pre>';


$number = 15;
$str = 'PHP';
$bool = true;


// how we can check the type of the variable;
// var_dump()
var_dump($number);
var_dump($str);


// is_
// is_bool()
var_dump(is_bool($bool));

// is_numeric   is_numeric checks if the value is a number or a numeric string.
var_dump(is_numeric($bool));

// is_integer
var_dump(is_integer($bool));

// is_int()
var_dump(is_int($number));

// is_float
var_dump(is_float($number));

// is_string()
var_dump(is_string($str));

// is_array()
var_dump(is_array($str));


// example to know the benefit of checking
// how I can dela with this array while its contain arrays and string
$entries = [
    ['title' => 'The most famous band!'],
    'A classical concert'
];

foreach ($entries as $entry) {
    if (is_array($entry)) {
        var_dump($entry['title']);
    } else {
        var_dump($entry);
    }
}

echo '</pre>';