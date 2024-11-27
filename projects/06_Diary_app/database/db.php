<?php

include_once __DIR__ . '/../inc/database.inc.php';


// connect to the server
$server = connectToServer('localhost', 'root');

// connect to the database
$db = connectToDatabase($server, 'diary_app','localhost', 'root', '');





// create user

$createUser = "CREATE TABLE IF NOT EXISTS `entries` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `title` varchar(50) NOT NULL,
    `content` text, 
    `date` date
    )";

$db->prepare($createUser)->execute();