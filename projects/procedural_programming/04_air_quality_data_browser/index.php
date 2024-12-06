<?php
include_once __DIR__ . '/inc/functions.inc.php';

$contents = file_get_contents(__DIR__ . '/data/index.json');
$cities = json_decode($contents, true);


include_once __DIR__ . '/views/header.inc.php';
?>

    <ul>
        <?php foreach ($cities as $city) : ?>

            <li><a href="city.php?<?= http_build_query(['city' => $city['city']]) ?>">
                    <?= $city['city'] . ',' . $city['country'] . ',(' .
                    $city['flag'] . ')  => ' . $city['filename'] ?></a></li>

        <?php endforeach; ?>
    </ul>

<?php
include_once __DIR__ . '/views/footer.inc.php';



