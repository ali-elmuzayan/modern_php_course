<?php
$categories = ['history', 'geography', 'math', 'science', 'technology'];


// iterate with foreach
// best practice => to name the single element to be single of the plural
foreach ($categories as $category) {
    echo $category . '<br>';
}

?>

    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category ?></li>
        <?php endforeach; ?>
    </ul>
<?php
// control loops with break
//break will stop the iteration
/*
 *
 * continue => mean it will skip this iterate
 * break => mean will skip the rest of the current operation and stop loop
 */