<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL?>/assets/styles/flash.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL?>/assets/styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL?>/assets/styles/admin.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL?>/assets/styles/custom.css" />
    <title>CMS Project</title>
</head>
<body>
<!-- Flash Messages Container -->
<div id="flash-messages" class="flash-container">
    <?php
    use App\Support\Flash;

    // Display all flash messages
    Flash::flash();
    ?>
</div>
    <header>
        <h1>
            <a href="admin/index">CMS: Admin</a>
        </h1>
        <p>An amazing admin area!</p>
        <nav>

        </nav>
    </header>
    <main>
        <?php echo $contents; ?>
    </main>
    <footer>
        <p></p>
    </footer>
    <script src="<?= BASE_URL?>/assets/js/flash.js"></script>
</body>
</html>