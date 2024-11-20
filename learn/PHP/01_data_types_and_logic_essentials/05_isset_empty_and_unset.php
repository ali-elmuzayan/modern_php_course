<?php
/*
 * why using them
 *  - to check the status of the variable
 *  - we use them to avoid error message
 *  - for example => print the header if it exist
 */


/*
 * isset() is a language construct, not a function.
 *   - isset() returns true if a variable is set and not null.
 *   - isset() returns true if an array element exists and not null.
 *   - isset() returns true if a string index valid or false otherwise.
 *   - isset() returns true if all variable are set and not null. It’ll
 *     stop evaluating once it encounter an unset variable.
 */


/*
 * empty:
 *   - Use the PHP empty() construct to check if a variable is
 *      not set or its value is false.
 */


/*
 * is_null()
 *   - The is_null() checks a value and returns true if that value is null.
 *     Otherwise, it returns false.
 *   - The is_null() behaves the same as the identity operator (===).
 */

// unset to delete a variable
/*
 * using unset function to completely remove the variable
 */
$name = 'ali';
unset($name);

if (isset($name)) {
    echo 'unset didn\'t finish her job';
}

// alternative syntax
// use it with html to know where the code start and where it ends
if (!empty($name)) :
    echo 'unset didn\'t finish her job';
endif;

