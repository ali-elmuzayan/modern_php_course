<h1>Most Common Names:</h1>

<ol>
    <?php foreach ($overview as $name): ?>
        <li>
            <a href="name.php?<?= http_build_query(['name' => $name['name']]) ?>"><?= html($name['name']) ?></a>
        </li>
    <?php endforeach; ?>
</ol>