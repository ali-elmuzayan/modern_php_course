<?php
include_once __DIR__ . '/inc/functions.inc.php';
include_once __DIR__ . '/inc/images.inc.php';
include_once __DIR__ . '/views/header.php';
?>

<?php if (!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
    <?php
    $image = $_GET['image'];
    $imageDescription = e($imageDescriptions[$_GET['image']]);
    ?>

    <!-- Start code for valid image-->
    <h2><?= e($imageTitles[$image]) ?></h2>
    <img src="./images/<?= rawurlencode($image) ?>" alt="">
    <p><?= str_replace("\n", '<p></p>', $imageDescription) ?></p>
    <a href="index.php"
       class="end-left">back to gallery</a>

    <!-- End code -->
<?php else : ?>
    <div class="notice">
        This Image Could not be found
    </div>
<?php endif ?>
<?php
include_once __DIR__ . '/views/footer.php';