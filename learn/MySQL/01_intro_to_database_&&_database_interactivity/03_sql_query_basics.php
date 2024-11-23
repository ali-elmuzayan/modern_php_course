<?php

$pdo = new PDO('mysql:host=localhost;dbname=notes_db', 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// SQL query Basics: Utilize the ORDER BY clause
//      and SELECT specific columns
/*
 * as long as there is a primary key use it to order by it
 *  and you can order by any column you want.
 *
 * ORDER BY
 *      - ORDER BY 'column' ASC or DESC
 *
 * example:
 *  - SELECT * FROM `notes` ORDER BY `title` ASC;
 *      - the backticks quotes is not important in this case
 *
 * best practice:
 *      - use backticks
 *      - keep the key word of sql in uppercase
 *
 */

$stmt = $pdo->prepare('SELECT * FROM `notes` ORDER BY `id` DESC');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($result);
echo '</pre>';


// Filter Data With the WHERE Clause and Fetch Individual Entries With PDO
/*
 * Where
 *  - use it for filter
 *  - SELECT * FROM `notes` WHERE `title` = 'challenges' ORDER BY `title` ASC;
 *  - WHERE should come before order
 *      first filter then order => select, filter then order
 *
 * OR, AND
 *  - SELECT * FROM `` WHERE `` = 1 OR `` = 7 *  - now you can get this 2 entries
 *  - use it to say if one of this condition is true with and that mena the
 *    both conditions should be true;
 *
 *
 * fetch()
 *  - instead of fetching all the result you can use fetch to fetch
 *    one entity only
 *  - $stmt->fetch() Try this one  $stmt->fetch(PDO::FETCH_ASS0C)
 */
$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE  `id` = 1');
$stmt->execute();
while (($result = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}

// close the connection
$pdo = null;
