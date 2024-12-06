<?php
require_once __DIR__ . '/inc/bootstrap.inc.php';

if (!empty($_POST["email"])) {
    create_flash_message("email", "email is existed", FLASH_SUCCESS);
}


render('registration');

