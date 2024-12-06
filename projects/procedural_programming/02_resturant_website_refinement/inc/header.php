<?php
include_once __DIR__ . '/functions.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Culinary Cove <?php if (!empty($pageTitle)): ?> &bull; <?= e($pageTitle) ?><?php endif ?></title>
</head>
<body>
<?php
if (empty($pageImg)) {
    $pageImg = 'our-mission.png';
}

?>
<header class="header"

        style="background-image:url('./images/<?= rawurlencode($pageImg) ?>');background-size: cover; height: 40vh">
    <h1>Culinary Cove</h1>
    <p>Yur Sanctuary for Exceptional flavors</p>
    <div class="nav-box">
        <a href="our-mission.php" class="nav-btn <?= isActivePage('our-mission.php') ?>">Our mission</a>
        <a href="ingredients.php" class="nav-btn <?= isActivePage('ingredients.php') ?>">ingredients</a>
        <a href="menu.php" class="nav-btn <?= isActivePage('menu.php') ?>">menu</a>
    </div>
</header>
<main>