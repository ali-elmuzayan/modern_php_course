<?php
include_once __DIR__ . '/functions.inc.php';

if (isset($_FILES['image'])) {
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK && $_FILES['image']['size'] > 0) {
        $nameWithoutExtention = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $nameWithoutExtention);

        $originalImg = $_FILES['image']['tmp_name'];
        $destImg = __DIR__ . '/' . $name . '-' . time() . '.jpg';

        // unpacking the width and height from the original img
        [$width, $height] = getimagesize($originalImg);
        $maxDim = 400;
        $scale = $maxDim / max($width, $height);

        $newWidth = $width * $scale;
        $newHeight = $height * $scale;

        $img = imagecreatefromjpeg($originalImg);

        $newImg = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($newImg, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // create the image with the new dimensions in the new destination;
        imagejpeg($newImg, $destImg);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Submit!">
</form>

</body>
</html>
