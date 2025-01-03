<?php

namespace App\Support;

use App\Core\Container;
use App\Core\Database;
use PDO;
use PSpell\Config;

class AuthService
{

    private Database $pdo;

    public function __construct(private Container $container)
    {
        $this->pdo = $container->get(Database::class);
    }

    public function handleLogin(string $username, string $password)
    {
        // check if the input is filled
        if (empty($username) || empty($password)) {
            Flash::flash('empty_inputs', 'you should fill inputs', FLASh::FLASH_ERROR);
            return false;
        }

        // get the username from the database
        $stmt = $this->pdo->getConnection()->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $entry = $stmt->fetch(PDO::FETCH_ASSOC);

        // check if it is exist in the database
        if (empty($entry)) {
            Flash::flash('not_valid', 'username is not exist', FLASh::FLASH_ERROR);;
            return false;
        }

        //check the password
        $verify_password = password_verify($password, $entry['password']);
        if (!$verify_password) {
            Flash::flash('wrong password', 'the password is not correct', FLASh::FLASH_ERROR);

            return false;
        }
        $_SESSION['id'] = $entry['id'];
        session_regenerate_id();
        return true;
    }

    public function isLoggedIn(): bool {
        return !empty($_SESSION['id']);
    }

    public function ensureLoggedIn() {
        $isLoggedIn = $this->isLoggedIn();
        if (empty($isLoggedIn)) {
            redirect::to('/admin/login');
        }
    }

}