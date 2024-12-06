<?php
require_once __DIR__ . '/inc/bootstrap.inc.php';


unset($_SERVER);
session_destroy();
redirect('index');