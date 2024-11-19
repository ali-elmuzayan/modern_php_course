<pre>
<?php

/*
IN this section:
    - learn about 02_arrays and associative array
    - with this we can create mapping between key and a value
    - In this chapter this will allow us to create mapping between
        - books and their corresponding author
*/

//Motivation & Define an 02_arrays and associative array
/*
    - example an array contain the author as the key and its books as the value
        so when you need to access a book you can do this by its author name
*/


$books = [
    'Harry Potter' => 'J.K. Rowling',
    'Lord of the rings' => 'J.R.R. Tolkien',
    'The little prince' => 'Antoine de saint Exupery',
    'Don Quixote' => 'Miguel de Cervantes',
    'Alice in wonderland' => 'Lewis carrol',
];


// how to access this
var_dump($books);
var_dump(isset($books['Harry Potter']));
var_dump(!empty($books['Lord of the rings']));
var_dump($books['Don Quixote']);


// add entry
$books['Romeo and Julia'] = 'William_shakespeare';

// update an entry  (will  overwrite the previous value)
$books['Romeo and Julia'] = 'William shakespeare';


// remove entry
unset($books['Harry Potter']);
var_dump($books);


// how the loop will work as key and value
// make it descriptive  instead of key and value (book and author)
//like
foreach ($books as $book => $author) {
    echo $book . ' it\'s author is ' . $author . '<br>';
}

// how the loop works as only value
foreach ($books as $author) {
    echo $book . ' , ';
}

// if you are looking for the keys
var_dump(array_keys($books));
// to deal with the keys
foreach (array_keys($books) as $author) {
    echo $author . '<br>';
}

//if you are looking for the value (not by loop)
var_dump(array_values($books));

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
?>
</pre>
