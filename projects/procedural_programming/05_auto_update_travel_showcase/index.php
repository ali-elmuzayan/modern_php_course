<?php
// helpful function for xss output
function html($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css"/>
    <title>Document</title>
</head>
<body>
<header><h1>Automatic Image List</h1></header>
<main><pre>
            <?php
            $handle = opendir(__DIR__ . '/images');

            $images = [];
            $allowedExtension = ['jpg', 'jpeg', 'png', 'gif'];
            // this will be created currentFile here and executed here
            while ($currentFile = readdir($handle)) {

                // ignore the '.' and '..' files
                if ($currentFile === '.' || $currentFile === '..') {
                    continue;
                }

                // check if the extension indicate to an image or not
                $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
                if (in_array($extension, $allowedExtension)) {

                    // initialize some variables
                    $title = '';
                    $contents = [];

                    // get the text file related to that image
                    $fileWithoutExtension = pathinfo($currentFile, PATHINFO_FILENAME);
                    $textFile = __DIR__ . '/images/' . $fileWithoutExtension . '.txt';

                    // check if the file exist get the content
                    if (file_exists($textFile)) {
                        $content = file_get_contents($textFile);
                        [$title, $contents] = explode("\n", $content, 2);
                        $contents = explode("\n", $contents);
                    }

                    // add the array that contain the data
                    $images[] = [
                        'image' => $currentFile,
                        'title' => $title,
                        'contents' => $contents,
                    ];
                }
            }
            ?>

        </pre>
    <?php foreach ($images as $image): ?>
        <figure>

            <h3><?= html($image['title']) ?></h3>
            <img src="images/<?= rawurlencode($image['image']) ?>" alt="<?= html($image['title']) ?>"/>

            <!--   the contents   -->
            <figcaption>

                <?php if (!empty($image['contents'])): ?>
                    <?php foreach ($image['contents'] as $content): ?>
                        <p><?= html($content) ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
                <br>
            </figcaption>
            <!--   end the content for the individual file     -->
        </figure>
    <?php endforeach; ?>

</main>
</body>
</html>