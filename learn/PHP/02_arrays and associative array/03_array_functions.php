<?php
echo '<pre>';

// in_array
/*
 * to check if the value is an array or not
 * in_array(value, array);
 */


// count
/*
 * return the length of element
 */


//array_unique()
/*
 * will return an array with unique values
 */

// sort =>
/*
 * will sort the current array and cot create a new one
 */


// array_search(item, array)
/*
 * will return the key of the item
 */


// array_slice(array, position, length)
/*
 * will return a slice from the array
 */


// min(), max(), array_sum()
/*--------------------------
 * min => will return the min number from the array
 * max => will return the max number in the array
 * array_sum => will return the sum of the array
 *
 * Note:
 *      - the average => array_sum() / count()
 */

$numbers = [10, 8, 6, 32, 44];
var_dump(array_sum($numbers));
var_dump(min($numbers));
var_dump(max($numbers));


// array_merge()
/* -------------
 * to create new array that contain those arrays
 * if it has the same key it will override it
 *
 * Note:
 *      - if you use array() it will create 2 dimensional array
 *      - you can link those 2 arrays by unpacking them [...arr1, ...arr2];
 */
$topics = ['Courses', '$categories', '$categories'];
$topics2 = ['TV', 'Travel'];

var_dump(array_merge($topics, $topics2));
echo "this way will merge also but with different way ";
var_dump([...$topics, ...$topics2]);


// note: write array_ and click (ctrl + space)
// try this with unpacking
$for_round = [10.899, 1];
echo round(...$for_round);


echo '</pre>';