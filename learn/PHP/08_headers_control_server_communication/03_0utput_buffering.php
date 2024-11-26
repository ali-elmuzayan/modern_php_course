<?php
// What is Output Buffering in PHP ?
/*
 * - Output buffering in PHP is a feature that allows you to temporarily
 *   hold the output generated by your script in memory (a buffer) instead
 *   of sending it immediately to the browser. This provides flexibility
 *   to modify, compress, or reorder the output before it is finally
 *   sent to the client.
 */


// How does it worK:
/*
 *  - Without Output Buffering:
 *    - When a PHP script outputs something (e.g., echo or print),
 *      the data is sent immediately to the browser.
 *    - This can lead to issues, such as being unable to modify headers
 *      or control the output after it starts.
 *
 *  - With Output Buffering:
 *    - The output is stored in a buffer instead of being sent directly
 *      to the browser.
 *    - You can manipulate the buffer (modify or delete it) before the
 *      output is sent.
 *    - The buffered content is sent to the browser only when you decide,
 *      or when the script ends.
 */


// Common Output buffering Functions:
/*-----------------------------------
 *  - ob_start()        => starts output buffering
 *
 *  - ob_get_contents() => returns the contents of the buffering
 *
 *  - ob_end_flush()    => sends the buffer content to the browsers and
 *                          ends buffering
 *
 *  - ob_end_clean()    => cleans the buffer and ends buffering without
 *                         sending the data
 *
 *  - ob_flush()        => Sends the buffer content to the browser but
 *                          continues buffering
 *
 *  - ob_clean()        => Cleans the buffer without ending it
 */


// Benefits of Output Buffering:
/*------------------------------
 * 1) Modify output
 *    - You can manipulate the output before it is sent to
 *      the browser (e.g., apply filters, compress content)
 *
 * 2) Prevent "Headers Already Sent" Errors
 *    - Since headers must be sent before any content, buffering
 *      ensures no output is sent prematurely.
 *
 * 3) Optimize Performance:
 *    - Combine multiple outputs into a single response, reducing the
 *      number of browser-server interactions.
 *
 * 4) Error Handling:
 *    - Capture and handle errors in output without affecting the
 *      user experience.
 */


// Use Case:
/*
 * - Generating Dynamic Content:
 *    - Capturing generated HTML, modifying it, and sending it as needed.
 * - Compression:
 *    - Compressing output (e.g., using ob_gzhandler) to reduce response
 *      size.
 * - File Generation:
 *    - Creating files like PDFs or images while controlling headers
 *      and output.
 * - Prevent Errors:
 *    - Avoiding issues like "headers already sent" when working with
 *      cookies, sessions, or redirects.
 */


// Best Practice
/*
 *  - Use output buffering only when necessary to avoid unnecessary
 *    memory usage.
 *  - Ensure that you properly clean or flush buffers to avoid
 *    unexpected behavior.
 *  - Use buffering for specific tasks like template rendering or
 *    output manipulation.
 */


// Output buffering: Avoid header Issues and Ensure Seamless File transmission
/*
 * issue you might have:
 *  - if you try to send about 4000 spaces before the heading content type
 *    it will work good but instead if you send 5000 this will make an issues
 *    => because
 *       PHP then will decide to determine the content to something then
 *       you will change it in the next line
 *       so you will see that it cannot modify the header information
 *
 *
 */