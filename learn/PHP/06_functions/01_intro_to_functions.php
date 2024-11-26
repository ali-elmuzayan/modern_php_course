<?php
// The problem that functions solved:
/*
 * - So far, our code has always been processed from top to bottom
 * - This is great, but not always the best way
 * Example:
 *  - We might want to re-use some part of our code
 *  - we would then need to copy this code every time we want to run it
 */


// Declare and Invocate Custom functions:
function functionName()
{
    echo 'function';
}

// parameter passing:
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// passing multiple parameter:
function fullName($fname, $lname)
{
    return $fname . ' ' . $lname;
}

// using default value:
function fullName2($fname, $lname = 'El-muzayan')
{
    return $fname . ' ' . $lname;
}

// you can return array
function fetch_news($id)
{
    return [
        'id' => $id,
        'title' => 'The title of the news!',
        'content' => 'The content of the news...',
    ];
}

// multiple return statements control function output
/*
 * - you can use it to stop the execution of the function
 *   when ever the return is;
 */


// null type: represent missing Values
/*
 * - if the function doesn't return anything then the output if
 *   you try to assign it to a variable it will be null
 *
 * - you can write it like this (null or NULL)
 */
function hello()
{
    echo 'hello';
}

// NOtes:
/*
 * 1) if you create a variable in function body it will be used only in function
 *    scope;
 *
 * 2) use return to extract function output, you can assing the value to
 *    a variable
 *    - you can return another function
 */


// Best practice:
/*
 * - you cannot create 2 function with the same name even if they in different
 *   files (in case the 2 files are linked )
 *   so it is better to do that
 *    => to ignore that if(!function_exists(functionName) { //declare it here}
 *
 * - the name should be descriptive
 */
if (!function_exists('fullName')) {
    function fullName($fname, $lname)
    {
        return $fname . ' ' . $lname;
    }
}

echo fullName('ali', 'ahmed');

var_dump(fetch_news(122));


