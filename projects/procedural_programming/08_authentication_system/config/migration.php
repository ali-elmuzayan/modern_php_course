<?php
require_once __DIR__ . '/db.php';

if (isset($pdo)) {

    $stmt = $pdo->prepare("CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL UNIQUE,
    `password` varchar(50) NOT NULL,
    `photo` varchar(150) DEFAULT NULL,
    `role` varchar(15) NOT NULL,
    `status` ENUM('active', 'inactive') NOT NULL DEFAULT 'inactive',
    `token` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
    $stmt->execute();
}