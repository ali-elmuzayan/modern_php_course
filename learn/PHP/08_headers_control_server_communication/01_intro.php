<?php


// PHP: Headers
/*
 * We will first have a look the $_SERVER array
 * after that, we'll see how headers are used in PHP
 *      - Browser => Server
 *      - Server => Browser
 * This will then allow us to develop new use cases:
 *  - we will program a .php file that can tell us if the user is using
 *    the firefox browser
 *  - We will see how we can automatically redirect a visitor to a different
 *    URL, and how this helps us with accepting a form
 *  - We will develop a custom error page (shown when a file can't be found)
 *  - We will trigger a fie download from PHP
 *
 */


// $_SERVER[];
/*
 *  - 'PATH_INFO'       => The path
 *  - 'PHP_SELF'        => the full path
 *  - 'REQUEST_URI'     => the full path with queries (parameters)
 *  - 'REQUEST_METHOD'  => the method of the request
 *  - 'REMOTE_ADDR'     => The ip address of the server (It could be
 *                          sensitive information in some places)
 *  - 'HTTP_USER_AGENT' => the browser info
 *  - 'SERVER_SOFTWARE' => the server software
 */