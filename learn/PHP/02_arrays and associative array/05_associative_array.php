<?php
echo "<pre>";


$books = [
    'Harry Potter' => 'J.K. Rowling',
    'Lord of the rings' => 'J.R.R. Tolkien',
    'The little prince' => 'Antoine de saint Exupery',
    'Don Quixote' => 'Miguel de Cervantes',
    'Alice in wonderland' => 'Lewis carrol',
];


// how to access the associative array
var_dump($books);
echo "<hr>";
var_dump(isset($books['Harry Potter'])); // to check if key is set or not
echo "<hr>";
var_dump(!empty($books['Lord of the rings'])); // to check if the key
echo "<hr>";
var_dump($books['Don Quixote']);
echo "<hr>";


// add, update, and remove  entry using the key;
$books['Romeo and Julia'] = 'William_shakespeare'; // add
$books['Romeo and Julia'] = 'William shakespeare'; // update
unset($books['Harry Potter']);
var_dump($books);
echo '<hr>';


// iterate
/*
 * how the loop will work as key and value
 * make it descriptive  instead of key and value (book and author)
 * looping (value only) and (key => value)
 */

foreach ($books as $book => $author) {
    echo $book . ' it\'s author is ' . $author . '<br>';
}
echo '<hr>';

foreach ($books as $author) {
    echo $book . ' , ';
}
echo '<hr>';

// array_keys:
/*
 * array_keys: will collect the keys and return a new array of keys
 */
var_dump(array_keys($books));
foreach (array_keys($books) as $author) {
    echo $author . '<br>';
}
echo '<hr>';

// array_value:
/*
 * if you are looking for the value (not by loop)
 */
var_dump(array_values($books));
echo '<hr>';


// how to sort the categories of product in alphabetical (ex: 'headphones' => 30)
$inventory = [
    'Laptop' => 15,
    'Tablet' => 25,
    'Smartphone' => 40,
    'Smartwatch' => 10,
    'Headphones' => 30
];
$categories = array_keys($inventory);
sort($categories);
echo "<br><br>";
var_dump($categories);
echo "</pre>";

// Note1:
/*
 *  - if you add an item with only value => it will add make the key
 *   as index
 *  - but the best practice is not mixing the associative array with the
 *    index array.
 *  - you can use array_search to return the key of associative array by
 *    its value ;
 */