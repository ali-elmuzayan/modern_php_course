<?php

// for xrf
function html($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// for debugging;
function dd($value)
{

    echo '<div style="background-color: rgb(200,200,200); color: #113343; font-size: 16px; width: 92%;margin: 10px auto; padding: 0.5rem">';
    echo '<pre>';
    var_dump($value);
    echo '</pre></div>';
    die();
}


// If the item is active, add the active class
function isActive($currentValue, $checkedKey, $activeClass = 'active')
{
    // Check if the key exists in $_GET or $_POST
    $value = null;

    if (isset($_GET[$checkedKey])) {
        $value = $_GET[$checkedKey];
    } elseif (isset($_POST[$checkedKey])) {
        $value = $_POST[$checkedKey];
    }

    // Compare the value to the current value
    if ($value == $currentValue) {
        return $activeClass;
    }

    return '';
}

function old($value)
{
    if (isset($_GET[$value])) {
        return $_GET[$value];
    } else {
        return '';
    }

}

function formatDate($date)
{
    // explode the date values to an array
    $dateExploded = explode('-', $date);
    // change the date to timestamp
    $timestamp = mktime(12, 0, 0, $dateExploded[1], $dateExploded[2], $dateExploded[0]);
    // the set our format
    return date('d/m/Y', $timestamp);
}


// to format date that is valid
function formatValidDate($date)
{
    // Validate input date format
    $dateParts = explode('-', $date);
    if (count($dateParts) !== 3 || !checkdate($dateParts[1], $dateParts[2], $dateParts[0])) {
        return "Invalid date format";
    }

    // Convert to timestamp and format
    $timestamp = strtotime($date);
    return date('d/m/Y', $timestamp);
}


// to resize the image and return the new image
function resizeImage($maxDim, $image)
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

// remove image
function removeImg(string $imagePath): bool
{
    if (file_exists($imagePath)) {
        return unlink($imagePath);
    }
    return false;
}