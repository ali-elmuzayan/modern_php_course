<?php
// Text transformation: Pattern-Based Edits with `preg_replace`
/*
 * preg_replace:
 *  - to perform text replacement
 */

$message = 'The hotel costs $ 250.00, and the flight is $ 150.00. And this number is just annoying: 123.00';

// use to hide the prices instead will show ---
$match = preg_replace('/\$? 0?([0-9]+\.[0-9]{2})/', '---', $message);

var_dump($match);
echo '<hr>';

// instead we can just add something between without change it (not best practice to use)
// because it could make issues
$match = preg_replace('/\$? 0?([0-9]+\.[0-9]{2})/', '--- $0', $message);

var_dump($match);
echo '<hr>';
echo '<pre>';
echo '</pre>';

// or you can show it with multiple capture groups

$match = preg_replace('/(\$? 0?)([0-9]+\.[0-9]{2})/', '$0 -- $1 --- $2 -- $3', $message);
/*
 * $0 will add the whole string that match
 * $1 will add the first group captured
 * $2 will add teh second group captured
 * $3 will not do anything in this case
 */
echo '<pre>';
echo '</pre>';
echo '<pre>';
echo '</pre>';
var_dump($match);
