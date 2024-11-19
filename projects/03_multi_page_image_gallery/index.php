<?php
include_once __DIR__ . '/inc/functions.inc.php';
include_once __DIR__ . '/inc/images.inc.php';
include_once __DIR__ . '/views/header.php';
$images = array_keys($imageTitles);
$imagesLength = count($images);

?>
    <header>
        <h1>Image Gallery</h1>
        <p>Capturing Moments . Creating Memories</p>
    </header>
    <div class="container">
        <?php for ($i = 0; $i < $imagesLength; $i++): ?>
            <div class="image-box">
                <a href="image.php?<?= http_build_query(['image' => $images[$i]]) ?>">
                    <h2 class="image-title">hello <?= e($imageTitles[$images[$i]]) ?></h2>
                </a>
                <img src="images/<?= e($images[$i]) ?>" alt="" class="image">
            </div>
        <?php endfor; ?>
    </div>

<?php
include_once __DIR__ . '/views/footer.php';