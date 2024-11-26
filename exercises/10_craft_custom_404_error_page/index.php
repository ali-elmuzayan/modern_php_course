<?php

function e($value)
{
    htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$id = (!empty($_GET["id"])) ? (int)$_GET["id"] : 1;


if ($id >= 5) {
    // to show a normal error of the browser
    header("HTTP/1.0 404 Not Found");
    exit();
}

// from 2 to 4;
if ($id >= 2) {
    // to show a custom error
    header("Location: 404.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="simple.css">
    <title>News Letter</title>
</head>
<body>
<a href="index.php?<?= http_build_query(['id' => 6]) ?>">click here to test the normal 404 </a>

<hr>
<a href="index.php?<?= http_build_query(['id' => 3]) ?>">click here to test the custom 404 page</a>

</body>
</html>
