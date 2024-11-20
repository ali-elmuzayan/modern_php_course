<?php


// create an array
/*
 * [] or array()
 *      - array() is the old way
 * Note:
 *  - the array in php can contain multiple type of data like strings and number
 *    in one array
 *  - it is best practice to have only one type of data in array so all string
 *  - best practice when naming an array make it plural
 *      or all number
 */

$arr = [];
$arr2 = array(); // this is the old way (just know it)
$categories = ['history', 'geography', 'math', 'science', 'technology'];

// access an array
/*
 * you can access an array by its index
 *
 * Note:
 *  - if you try to access element that is not exist
 *      => you will see the value null and php will throw a warning and
 *         try to check if the key is exist before accessing (isset)
 *
 *  - how to check if a specific value is exist using in_array
 *    how to check if a specific key is exist use isset or !empty()
 */

echo $categories[0];


// Update an array:
/*
 * by overriding the element
 */
$categories[0] = 'Programming';


// Delete
/*
 * you can delete a specific element or delete the whole array
 *  - unset => will remove the key and value and it will be null
 */
echo "<pre>";
var_dump($categories);
unset($categories[4]);

var_dump($categories);

echo "</pre>";