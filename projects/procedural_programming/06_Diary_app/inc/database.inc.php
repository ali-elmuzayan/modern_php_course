<?php

// connect to the local server
function connectToServer($host,$username, $password = '') {
    try {
        $db = new PDO('mysql:host=' .$host, $username, $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $db;

    }catch (PDOException $e){

          echo $e->getMessage();
          die();
    }
}
// create database, you should connect to the database first

function connectToDatabase(&$server, $dbname, $host, $username, $password = '')  {
    $create_db = $server->prepare("CREATE DATABASE  IF NOT EXISTS `$dbname`")->execute();
    // stop the connection to connect again with the database
    $server = null;
    try {
        $db = new PDO('mysql:host=' .$host.';dbname='.$dbname, $username, $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $db;
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

}