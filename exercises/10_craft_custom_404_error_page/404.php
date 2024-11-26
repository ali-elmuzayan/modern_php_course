<?php
// if you don't use this code so the http status will be 200 (success)
http_response_code(404);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?= pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME) ?>/simple.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 page</title>
</head>
<body>
<header>
    <h1>News Website</h1>
</header>
<main>
    <h2> 404 Page Not Found </h2>
</main>
</body>
</html>