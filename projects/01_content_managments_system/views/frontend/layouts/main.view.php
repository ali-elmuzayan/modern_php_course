<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/styles/flash.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/styles/simple.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/styles/custom.css"/>
    <title>CMS Project</title>
    <title>CMS Project</title>
</head>
<body>
<header>
    <h1>
        <a href="index.php">CMS Project</a>
    </h1>
    <p>A custom-made CMS system</p>
    <nav>
        <?php foreach ($navigation as $navPage): ?>
            <a href="index.php?<?= http_build_query(['page' => $navPage->slug]); ?>"
               class="<?= (!empty($page) && $navPage->id === $page->id) ? 'active' : '' ?>">
                <?= $navPage->slug ?>
            </a>
        <?php endforeach ?>
    </nav>
</header>
<main>
    <?php echo $contents; ?>
</main>
<footer>
    <p></p>
</footer>
</body>
</html>