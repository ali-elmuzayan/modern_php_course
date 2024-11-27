<?php
include_once __DIR__ . '/inc/bootstrap.php';

$perPage = 6;
$page = (int) ($_GET['page'] ?? 1);

$offset = ($page - 1) * $perPage;

// statement for the count for pages
$stmt = $db->prepare('SELECT COUNT(*) AS `count` FROM `entries`');
$stmt->execute();
$count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
$numPages = ceil($count / $perPage);

if ($count < $perPage) {
    $offset = 0;
}

$stmt = $db->prepare('SELECT * FROM `entries` ORDER BY `date` DESC,`id` DESC LIMIT :perPage OFFSET :offset');
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>
<?php include_once __DIR__ . '/views/header.inc.php'; ?>
<!-- Start Nav -->
<?php include_once __DIR__ . '/views/nav.inc.php'; ?>

<!-- End Nav-->

<!-- Start the main content -->
<main class="main">
    <div class="container">
        <h1 class="main-heading">Entries</h1>

        <?php foreach ($entries as $entry): ?>
        <div class="card">
            <div class="card-img-box">
                <img src="./images/pexels-canva-studio-3153199.jpg" alt="card image" class="card-img">
            </div>
            <div class="card-desc-box">
                <span class="card-desc-time"><?= html(formatDate($entry['date']))  ?></span>
                <h2 class="card-heading"><?= html($entry['title']) ?></h2>
                <span class="card-line"></span>
                <p class="card-text">
                    <?= html($entry['content']) ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- start pagination-->
        <?php if($count > $perPage): ?>
        <ul class="pagination">
            <?php if ($page > 1): ?>
            <li class="pagination-li"><a href="index.php?<?= http_build_query(['page' => ($page > 1) ? $page-1 : 1]) ?>" class="pagination-link">&#x2190;</a></li>
            <?php endif ?>
            <?php for($i = 1; $i <= $numPages; $i++) :?>

            <li class="pagination-li"><a href="index.php?<?= http_build_query(['page' => $i]) ?>" class="pagination-link <?= isActive($i, 'page', 'pagination-li-active') ?> ">
                    <?= $i ?>
                </a></li>
            <?php endfor;?>
            <?php if ($page < $numPages): ?>
            <li class="pagination-li"><a href="index.php?<?= http_build_query(['page' => ($page < $numPages) ? $page+1 : $numPages]) ?>" class="pagination-link">&#x2192;</a></li>
            <?php endif ?>
        </ul>
        <?php endif ?>
        <!-- End pagination-->
    </div>
</main>
<!--  End Main content -->
<?php

include_once __DIR__ . '/views/footer.inc.php';