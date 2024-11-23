<?php

// Prevent Leakage of Database Connection Information in order (<= 8.1) PHP version
/*
 * whe you try to connect with pdo
 *  - if your password is wrong php will generate fetal error and the
 *    password will be visible
 *
 * how we can deal with this:
 *  - run on the latest version of php
 *  and
 *  - try and catch
 *
 * advantage:
 *  - you can control what is the message that shown
 *  - if you want see what happen you can temporarily remove try and catch
 *    then write it again  // to see what actually happen.
 *
 * Note:
 *  - as long as the connection is work so every thing will work good
 *  - If we are running PHP in version 8.2 or higher, then we are not
 *    affected from this security implication
 *    => the password will be hidden
 */

try {
    $pdo = new PDO('mysql:host=localhost;dbname=notes_db', 'root', '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo 'A problem occurred With the database connection ...';
    // var_dump($e->getMessage());
    die();
}