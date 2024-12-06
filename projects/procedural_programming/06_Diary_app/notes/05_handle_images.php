<?php
include_once __DIR__ . '/../inc/helpers.inc.php';


// How to scale an Image?
/*
 * we will learn how we can open this image in PHP and turn this
 * into a thumbnail
 *
 * to work with image
 *  - Imagick::__construct  // but it is not in all php
 *  - getimagesize() // the built one by php
 *     => width => $value[0]
 *     => height => $value[1]
 *
 * you can handle that with this way
 *
 * how to scale down this image:
 *  - first get the width and height of the source image:
 *  =>  [$width, $height] = getimagesize(filePath); // to unpack our array
 *
 *  - then
 *      $maxDim = 400;
 *      $scaleFactor = $maxDim / max($width, $height);
 *      $newWidth = $width * $scaleFactor;
 *      $newHeight = $height * $scaleFactor
 *  - then open the original image
 *      $img = imagecreatefromjpeg(imagePath)
 *  - create new image
 *      $newImg = imagecreatetruecolor($newWidth, $newHeight)
 *
 *  - copy the image
 *     imagecopyresampled($newImg, $img, 0,0,0,0, $newWidth,
 *                  $newHeight, $width, $height)
 *      - $newImg => the destination
 *      - $img => original image
 *      - 0,0 => is where to start at the destination
 *      - 0.0 => is where to start at the source
 *      - $newWidth, $newHeight => to write in the destination
 *      - $width, $height => of the original
 *
 * imagejpeg()
 *  - use it to open the image && to create an image file for us
 *  - if you want to show it as image
 *     => header('Content-Type: image/jpeg'); in the beggining
 *         with only the image as value output
 *  if you want to create a new file;
 *      => imagejpeg(img, imgPath)
 *
 *
 * Note:
 *  - this will copy the image and scale it down
 *  - by doing this all the information of the image will be lost and
 *    this is good for privacy
 *      - and allow us to respect the user privacy
 *      - and this will make us lost information that in some company
 *        will be needed
 *
 *
 */


// resize the image
// add the new image to the file


// Resize an Image


// Catch Invalid Uploads


// resize image functionality
// imageName
//$imageName = __DIR__ . '/IMG_1999.jpg';
//$img = imagecreatefromjpeg($imageName);
//
//if (file_exists($imageName)) {
//    // resize the image and set it to the new one
//    $img = resizeImage(400, $imageName);
//    // delete the exist image
//    unlink($imageName);
//    // add the new one with the new dimention
//    imagejpeg($img, $imageName);
//} else {
//    echo "The file $imageName does not exist.";
//}
