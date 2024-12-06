<?php
require_once __DIR__ . '/inc/bootstrap.inc.php';
$name = (string)($_GET["name"] ?? '');

if (empty($name)) {
    header("Location: index.php");
}
$entries = fetch_name_entries($name);

render('name.view', [
    'entries' => $entries,
    'name' => $name,
    // char here for adding active to the right character
    'char' => $name[0]]);
