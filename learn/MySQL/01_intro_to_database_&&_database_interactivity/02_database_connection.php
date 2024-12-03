<?php

// Initialization and Best Practice
/*
 * $pdo =
 *  new PDO('mysql:host=localhost;dbname=database_name', 'root','',
 *          [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 *
 *      => even with mariadb we will write mysql
 *      => tell the pdo module how to connect to my database
 *      => then the user and password
 *      => if the connection failed make it visible to me
 *      => PDO::ATTR_ERRMODE is a constant
 *
 *
 * Note:
 *      => There can be several things that might fail here and that might
 *         cause you to not be able to connect to your database
 *      => host:127.0.0.1
 *        - this mean we are now connecting through a network connection
 *        - this works for mac or linux cause in window mysql doesn't
 *          support sockets, those virtual files.
 *
 *      => if you want error to be in silence mode
 *          (which is very bad will confuse you)
 *          [PDO::ATTR_ERRMODE => PDO_ERRMODE_SILENT]
 *          don't use it even for legacy web hosted
 */


// Data retrieval with PDO: fetch Data from a database;
/*
 * $stmt = $pdo->prepare("SELECT * FROM `notes`")
 *      => we just prepare the query to execute it
 *      => var_dump($stmt)  // object(PDOStatement);
 *      => then we need to execute it with execute() before fetch it
 *          $stmt->execute()
 *
 * $result = $stmt->fetchAll();
 *      => after execute it we can now fetch the result
 *      => with fetchAll you can access the element by index and key
 *          because it will duplicate the data
 *      => but if you only interest in the keys use this code
 *        $stmt ->fetchAll(PDO::FETCH_ASSOC);
 *
 */


// When Should you close the connection?
/*
 * Explicitly closing:
 *  - Useful in long-running scripts or when you want to ensure resources
 *    are released after use.
 *
 * Implicit Closing:
 *  - If your scripts is short-lived, you can let PHP automatically close
 *    the connection at the end of the script execution.
 *
 *
 * How to close it
 *  - by set it to null
 *      => $pdo = null;
 *  - or by unset it
 *      => unset($pdo);
 *
 */


// Choosing the Charset: Ensure Compatibility with utf8mb4 encoding
/*
 * that allow you
 *   - charset from different languages
 *   - emoji
 *   - and more
 *
 * to do when connect set the charset=utf8mb4;
 */