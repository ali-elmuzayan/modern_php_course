<?php
require_once __DIR__ .'/autoload.php';
use App\Admin\User;
use App\Client\User as Client;
require_once __DIR__ . '/src/Admin/User.php';
require_once __DIR__ . '/src/Client/User.php';

$admin = new User();

$client = new Client();

var_dump($admin, $client);