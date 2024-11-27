<?php


function resizeImg($maxDim, $image)
{
    // extract the original width and height from the resource image
    [$width, $height] = getImagesize($image);

    // the factor that will set the right dimensions
    $scaleFactor = $maxDim / max($width, $height);

    // by the factor set the width and height of the new image
    $newWidth = (int)($width * $scaleFactor);
    $newHeight = (int)($height * $scaleFactor);

    // get the source image
    $img = imagecreatefromjpeg($image);

    // create a copy image
    $newImg = imagecreatetruecolor($newWidth, $newHeight);

    imagecopyresampled($newImg, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    return $newImg;
}