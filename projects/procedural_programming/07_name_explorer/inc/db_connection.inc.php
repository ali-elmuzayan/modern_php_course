<?php
// user name => names
// password => cC7/@aSkudWbU9i[


try {
    $pdo = new PDO('mysql:host=localhost;dbname=names;charset=utf8',
        'names', 'cC7/@aSkudWbU9i[', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    echo $e->getMessage();
    echo "A problem occurred while connecting to the database.";
    die();
}

