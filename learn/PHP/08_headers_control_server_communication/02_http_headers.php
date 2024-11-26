<?php


// HTTP headers: Examine Browser to server communication
/*
 * you can test the communication in
 *   1) open inspect in the browser
 *   2) open Network section
 *   3) headers
 */

// to access the user Agent
/*
 * $_SERVER['HTTP_USER_AGENT"]
 *  - it will be different from a browser to the other browser
 */

// we can send a header manually
/*
 * header()
 *  - header('Content-Type: text/html')
 *    => it is mean the content type is html
 *  - header('Content-Type: text/plain')
 *    => that mean the content type is text even if it had html tags it will
 *       show it as plain text
 *  - header('Content-Type: image/jpeg');
 *    => that mean the content is image
 *  then you can readfile(image path);
 *
 *
 * readfile() => to open the image
 *  - to open the file with php only without needing to html
 *  - by it you can scale the image and decrease the resolution
 *
 *
 * dynamic serve css with php
 *  - header('Content-Type: text/css')
 *  - if you decide to write your style in style.php instead of style.css
 *     then you need to use this code
 *  - then your style will be applied to your html code if you linked them
 *  - note:
 *      you can do this with the js code
 */


// content disposition header and control length header:
/*
 * you can use it to download file
 * header('Content-disposition: attachment, filename=image.jpg ') => to download
 *
 * header('Content-Length: ' . filesize(filepath)); => to follow the download
 *
 * note:
 *  - you can specify what ever file you want
 *
 * note 2:
 *  - if you want to browser to provide us with information, how much
 *    percentage of thins file is already downloaded;
 *
 */

// Redirect User to file:
/*
 * header('Location: ')
 *  - you can redirect user to a file
 *  - or to a completely different website
 *
 * note:
 *  - redirect doesn't terminate the php script
 *  - even so the browser will usually not care about the rest of might
 *    even stop load the rest of the script
 *  => to terminate the php script add die()
 *     but usually we use exit;
 */


// HTTP: Status Codes:
/*
 *  - Status codes are used to indicate the status of a page
 *  - They are extremely important, especially for search engines
 *  Examples:
 *     - 200 Ok: Everything was okay
 *     - 301 Moved Permanently : The URL has changed permanently
 *     - 302 Found: moved temporarily, the URL has changed temporarily
 *
 *     - 400 Bad Request: The request is malformed or invalid;
 *     - 403 Forbidden: The server understands the request, but refuses
 *                      to authorize it.
 *     - 404 Not found: The requested resource could not be found
 *
 *     - 500 internal server error: a generic error occurred on the server
 *
 *
 * Note:
 *  - if you create a custom page for 404 you need to use
 *    http_response_code(404) to tell the header that status
 *    otherwise it will think it is a success request (200)
 *
 * - you should have htaccess tell where the custom 404 file so if there
 *   is a 404 what ever it is it will show our custom 404 file even if it
 *   came from the server itself
 *  => ErrorDocument 404 filepath
 *  => with filepath
 *      only use if tor custom error
 *
 * if you faced any problem to link the css file with 404
 *  - you could use internal style
 *  - or use this
 *    href="<?= pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME); ?>/style.css"
 */