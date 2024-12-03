<?php
require_once __DIR__ . '/inc/bootstrap.inc.php';
$char = (string)($_GET['char'] ?? '');
$char = sanitize_upper_char($char);
$alphabet = genAlphabet();

// if it less than 0 or other than alphabet character redirect to index
if (strlen($char) === 0 OR !in_array($char, $alphabet)) {
    header("location: index.php");
    exit;
}

$page = (int) ($_GET['page'] ?? 1);
$perPage =  15;
$count = count_names_by_initial($char);

if ($page < 1) {
    $page = 1;
}
if ($page > ceil($count / $perPage)) {
    $page = ceil($count / $perPage);
}

$names = fetch_names_by_initial($char, $page, $perPage);

render('char.view', ['char' => $char, 'names' => $names,
    'pagination' => ['page' => $page, 'count' => $count, 'perPage' => $perPage]]);
?>


