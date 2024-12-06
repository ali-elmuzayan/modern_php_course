<?php
// overview:
/*
 *
 */

/*
 * note1: rawurlencode()
 *  if the image name come from a variable
 *    - use this function => rawurlencode() this will handle the image name
 *      if there is words make problem
 *      - don't use htmlspecialchars
 */


// rawurlencode()
/*
 * The rawurlencode() function in PHP encodes a string to be used in a URL,
 *  making it safe for transmission over the web. This function is
 *  particularly useful when you need to pass special characters in query
 *  strings or URL paths
 *
 * Key features:
 *      - Encodes special characters by converting them to a % followed by
 *        two hexadecimal digits (percent-encoding).
 *      - Spaces are encoded as %20 (unlike urlencode() which converts
 *        spaces to +).
 *
 *
 * Common Use case:
 *  1) Encoding Query Parameters: It ensures that special characters
 *     in URLs or API requests are properly encoded.
 *
 *  2) Encoding File Paths: When creating URLs with dynamic file paths.
 *
 *  3) Compatibility with RFC 3986: It's compliant with RFC 3986, making it
 *     ideal for path components of URLs.
 *
 * NOte:
 *  - when passing value to it don't have the whole path, just add the
 *    filename.
 *     => because something like '/' will lose it meaning.
 *
 */


// Css attributes for Image Control:
/*
 * what is the problem:
 * - imaging that you want to include 2 images, they both have 2 different
 *   dimensions
 *
 * - to solve that you need to give them all the same dimension, but in
 *   that case the proportion will not match
 *
 * To fix the proportion
 * - object fit:cover
 *    => note: the width and height should be selected
 *
 * another way to set the height
 * - aspect-ratio: 1080/1920;    or 1920/1080;
 */