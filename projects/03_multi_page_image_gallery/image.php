<?php
include_once __DIR__ . '/inc/functions.inc.php';
include_once __DIR__ . '/inc/images.inc.php';
include_once __DIR__ . '/views/header.php';

if (!empty($_GET)) {
    $image = $_GET['image'];
    $imageTitle = $imageTitles[$image];
    $imageDescription = $imageDescriptions[$image];
} else {
    header('Location: index.php');
}
?>
    <header>
        <h1>Image</h1>
    </header>
    <div class="container">
        <img src="Images/<?= $image ?>" class="main-img" alt="" width="300px">
        <p><?= str_replace("\n", '<p></p>', $imageDescription) ?></p>
        <a href="index.php"
           class="end-left">back to gallery</a>
    </div>

<?php
include_once __DIR__ . '/views/footer.php';