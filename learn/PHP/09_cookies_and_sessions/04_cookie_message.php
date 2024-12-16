<?php

if (!empty($_GET['cookieok'])) {
    setcookie('cookieok', '1');
    header('Location: 04_cookie_message.php');
    exit;
}

if (!empty($_COOKIE['cookieok'])) {
    $counter = @(int)($_COOKIE["counter"] ?? 0);
    setcookie("counter", $counter + 1);
    var_dump($counter);
} else {
    echo "<p> Do you allow cookies: <a href='04_cookie_message.php?cookieok=yes'>yes</a>";
}


// what do we mean with cookie message
/*
 * that mean we are not allow to set the cookie before we got this
 * confirmation
 *
 * how we can do this
 *  - by nesting our code into if condition if the $_COOKIE['cookieok']
 *    is not empty then implement the accepted cookies
 *  - otherwise set a paragraph and that p contain a like to the same page
 *    with param to yes
 *
 *
 * cookie message is necessary in some country
 */
