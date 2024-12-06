<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'authentication_php';
try {
    $pdo = new PDO("mysql:host=$host", $user, $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


if (!empty($pdo)) {
    $stmt = $pdo->prepare("CREATE DATABASE IF NOT EXISTS `$db`");
    $stmt->execute();
    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (PDOException $e) {
        echo 'Connection with DB failed: ' . $e->getMessage();
    }
}