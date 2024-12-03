<?php

// here if you try to upload invalid uploads:
/*
 * - an error will be generated, because of the functionality we just did
 *    1) because when you try to get the image size it will return false
 *    2) when we try to get the image from the image file
 *       imagecreatefromjpeg() a false will returned if it not image
 *
 *
 * // to catch ivalid uploads while resize image:
 *  1) if the width is false then no image uploaded
 *      so we should check (!empty($imageSize))
 *
 *  2) if the image uploaded not of type image jpeg; imagecratefromjpeg()
 *      We need to check if (!empty($jpg))
 */