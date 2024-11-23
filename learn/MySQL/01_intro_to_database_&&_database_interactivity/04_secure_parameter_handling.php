<?php
$pdo = new PDO('mysql:host=localhost;dbname=notes_db', 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
// secure parameter handling in PDO:
// Prevent SQL injection with Bind Methods
/*
 * SQL injection is a major security risk and you should protect your
 *  project form this
 *   - it is allow attackers to manipulate teh query to access or alter
 *     the database information.
 *
 * Example:
 *   - if the parameter is numeric id you can type cast it (int)
 *
 * how to prevent it
 *   - by writing in to prepare the changeable value :
 *      $stmt = $pdo->prepare('')
 *   - then before execute use
 *      - $stmt->bindValue('id', $value);
 *
 * Note:
 *  - if you forget that at one point in your website, the whole security
 *    of your whole software is compromised
 *
 */
$id = 1;
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = :id');
$stmt->bindValue('id', (int)$id);
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);

// How you can insert data securely with INSERT INTO, placeholders, and
// the bindValue method
/*
 *
 * for example of the dangerous of not using bindValue
 *      - say that you enter \' as the value that will make error
 */

$title = 'this title from PHP';
$description = 'this description from PHP';

$stmt = $pdo->prepare("INSERT INTO `notes` (`title`, `description`) VALUES (:title, :description)");
$stmt->bindValue('title', $title);
$stmt->bindValue('description', $description);
$stmt->execute();


// now we will select all the value to check;
$stmt = $pdo->prepare("SELECT * FROM `notes`");
$stmt->execute();
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($notes);
echo "</pre>";


// close the  connection using unset
unset($pdo);

