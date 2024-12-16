<?php
// cookies
/*
 * - cookies are like little fragments of data that our server can tell
 *   the client to store
 *
 * - to access the cookies that already sets
 *   $_COOKIE;
 *
 *
 */

// How to set the cookie:
/*
 * setcookie()
 *  - name
 *  - value
 *  - expires_or_options
 *  - path
 *  - domain
 *  - secure
 *  - httponly
 *
 *
 *  - setcookie will generate a header, which is then sent to the browser
 *
 * Notes:
 *  - cookies are not safe
 *  - setting the cookie once, and it will store in the client
 *  - user generated content even if  they came from the server but the
 *    user can manipulate the m
 *
 *  - if set cookie come in the end or middle of the code it might not work
 *    you should write it in the top
 *
 * using arguments names:
 *  - you can access any argument without considering the arrangement
 */


// to