<?php
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
 */