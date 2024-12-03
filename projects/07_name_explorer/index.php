<?php
require_once __DIR__ . '/inc/bootstrap.inc.php';


$overview = gen_name_overview(15);

render('index.view', ['overview' => $overview, 'char' => '0']);




