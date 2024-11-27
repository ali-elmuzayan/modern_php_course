<?php
// Typed functions:
/*
 * so far:
 *  - We were able to create functions and use them to modularize
 *    our code
 *
 * However:
 *  - One important step is still missing
 *  - start with PHP 7.0+, we can add type declarations to our
 *     functions
 *  - Type declarations will allow us to write more reliable code
 *  - at the beginning (PHP7.0), many features were still missing
 *  - But since PHP 8.0+, type declarations are ready to be used.
 *
 * Type declarations have been a huge step for PHP:
 *  - Old code without type declarations is still supported.
 *  - Many other tutorials don't teach you this, but type
 *    declarations are essential for modern, reliable PHP code.
 */

// typed function Secure & Document you code
/*
 * Real scenarios
 *  - your function deal with integer but the user input a string
 *    that might make an issue
 *  - your function accept strings and deal with it with echo
 *    but the user passed an array this will make a fetal error
 *
 *   => to solve this you can type your function so our function
 *      will not receive anything other than this type
 *      function addFive(int $number) {}
 *
 * what if I use it
 *  - also an error will be shown if you add value with not in the
 *    same type but this will make your code more reliable and
 *    you can handle all the scenario easily
 */

function addFive(int $number)
{
    return $number + 5;
}

// Union Types: Enable Multiple Parameters Types
/*
 * real scenario:
 *  - if you add a number with comma php will do the conversion
 *    automatically by dropping everything behind the comma
 *
 * anion type
 *  - allow us to specify that one parameter can either have
 *    one type or another
 *     type
 *      => float|int $numbers
 *      => array|bool|string $value
 *
 */


// Enforce Reliable function outputs
/*
 * : int
 *  - when you determine this you cannot return anything than
 *    the type you selected
 *    => function add_five(int $number) : int|float {}
 */

// Nullable type:
/*
 * why using nullable type
 *  - because if there is null or empty value added so no error
 *    will happen
 *
 * HOw to use
 *  - function print_x5(string|null $message) {}
 *  - function print_x5(?string $message) {}  // this is better
 *
 * Note:
 *  - if you using a union type so you need to use the union type
 *     with null while, if you using one type you can use (?)
 *
 * Note2:
 *  - you need to write return null if it needed not just let it
 *    empty like this return;
 *
 */

function welcome(int|float $number): ?string
{
    return 'hello' . $number;
}

function welcome2(int|float $number): ?string
{
    return null;
}

// Enforce Accurate Type Handling:
/*
 * to prevent type conversion
 * for example:
 *  - index.php?page=3;  if you want to access the 3 it will be a string
 *    then pass it to an int typed function it will convert automatically
 *    into integer
 *    what if you don't want all of this to happen
 *
 * How
 *  - add declare(strict_type=1)
 *  - it must be the first statement;
 *      => because it will change how the rest of the file will be
 *         parsing
 *
 *  - it more like a syntactical construct ;
 * so
 * - when passing a string int function that accept only int you need
 *   to type casting it before add_five((int) $_GET['id'])
 *
 * Emphasize:
 *  - things that work sometimes or most of the time, but sometimes
 *    don't work we need to avoid
 *  - we want things to fail if they can eventually fail sometimes
 *  - and that is way we need strict type to make PHP significantly
 *    strict
 */

