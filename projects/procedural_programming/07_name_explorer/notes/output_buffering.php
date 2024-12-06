<?php


// Output buffering
/*
 *  - allow us to capture the output of our PHP program and then work with
 *  it
 *  - to start output buffering => ob_start();
 *     - this mean the value that run after will no longer send to the
 *       browser, and it will be captured by the output buffer
 *     - and it will only be transferred once PHP is done with executing
 *       the script
 *  - to clean the buffer => ob_clean()
 *  - ob_flush
 *  - ob_get_clean()
 *     - it will clean the buffer but will return the value
 *
 * usage:
 *  - you can buffer some data and work one something
 *    then after end return the data that buffered before
 *
 *
 * note:
 *  - in render params
 *    => you can use extract() function instead of foreach
 */

// you can pass a file into a specific place in the index for example
// if you echo $content then you will return all the view data
function render_in_index(string $view)
{
    ob_start();
    require_once __DIR__ . '/views/' . $view . '.php';
    $content = ob_get_clean();
    require_once __DIR__ . '/index.php';
}


// you can pass variable to this file
function render($view, array $params = [])
{
//    foreach ($params as $key => $value) {
//        $$key = $value;
//    }
    extract($params);
    ob_start();
    require_once __DIR__ . '/views/' . $view . '.php';
    $content = ob_get_clean();
    require_once __DIR__ . '/index.php';

}
