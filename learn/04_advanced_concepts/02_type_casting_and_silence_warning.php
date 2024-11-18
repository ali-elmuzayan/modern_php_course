<?php


/*
 * why we need type casting ?
 *   in case we want to manipulate a mathematical operation
 *   then we should be casting the string if user added, or we will face an error
 *
 * you can force the type to be a specific type
 * - (int)
 * - (string)
 */


$price = (int)'150papers';
echo $price;


// silence warning @: silence php warning
/*
 * this working with warning not fetal error
 * using @ if warning appear it will silence it
 *
 */

if (isset($_GET['name'])) {
    echo '</br>';
    $name = @(string)$_GET['name'];
    var_dump($name . '!!!');
}

?>
    <br>
    <a href="02_type_casting_and_silence_warning.php?<?php
    echo http_build_query(['name' => ['ali', 'ahmed']]) ?>">Clink on link</a>


<?php

// null coalescing

// this will not work because  (int) $_GET['price'] have the priority (generate warning)
$price = (string)$_GET['name'] ?? ' ';

// this will work because of the bracket () but will show warning because of the array
$price = (string)($_GET['name'] ?? 'none');

// this one will work and silence the error
$price = @(string)($_GET['name'] ?? 'none');

echo '<br>';
echo $price;
echo '<br>';

//