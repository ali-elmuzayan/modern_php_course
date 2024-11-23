<?php

echo "<h3 style='background-color:#b7b7b7 ;padding: 15px;margin: 10px;text-align: center; border: 1px solid;'> By reloading this page you will delete the last entity in the notes 
table</h3>";
$pdo = new PDO('mysql:host=localhost;dbname=notes_db', 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// data manipulation: Using UPDATE and DELETE FROM securely
/*
 * UPDATE `table` SET `column` = '' WHERE `id` = id;
 *  => we filtered by id because it is unique
 *
 * Note:
 *  - if there is no entry with that id so there is no rows effects
 *    and this code will affect anything.
 */


$stmt = $pdo->prepare("UPDATE `notes` SET `title` = :title, `description` = :description WHERE `id` = :id");
$stmt->bindValue('id', 1);
$stmt->bindValue('title', 'New Title');
$stmt->bindValue('description', 'New description from PHP');

$stmt->execute();

$notes = $pdo->prepare("SELECT * FROM `notes`");
$notes->execute();
$notes = $notes->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($notes);
echo '</pre>';


// DELETE;
/*
 * DELETE FROM `table` WHERE `id` = id;
 *      => using id because it is a unique value ;
 */
$lengthOfTheNotes = count($notes);
$lastId = $notes[$lengthOfTheNotes - 1]['id'];
var_dump($lastId);
$delete = $pdo->prepare("DELETE FROM `notes` WHERE `id` = :id");
$delete->bindValue('id', $lastId);
$delete->execute();

// close the connection
$pdo = null;