<?php

namespace App\Core;
use PDO;
class Database
{
    public function __construct(private string $host,
                                private string $dbName,
                                private string $user,
                                private string $password,

    ) {

    }
    public function getConnection() :PDO
    {
        $dns = 'mysql:host='. $this->host .';dbname='. $this->dbName;
        return  new PDO($dns, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

}