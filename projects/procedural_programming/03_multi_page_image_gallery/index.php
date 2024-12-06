<?php
include_once __DIR__ . '/inc/functions.inc.php';
require_once __DIR__ . '/inc/images.inc.php';
include_once __DIR__ . '/views/header.php';
//$imagesLength = count($images);
?>
    <div class="gallery-container">

        <?php foreach ($imageTitles as $src => $title): ?>
            <a href="image.php?<?= http_build_query(['image' => $src]) ?>" class="gallery-item">
                <h3><?= e($title) ?></h3>
                <img src="./images/<?= rawurlencode($src) ?>" alt="<?= e($title) ?>">
            </a>
        <?php endforeach; ?>
    </div>

<?php
include_once __DIR__ . '/views/footer.php';