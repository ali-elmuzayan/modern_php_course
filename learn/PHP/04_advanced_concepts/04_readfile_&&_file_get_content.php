<?php

/*
 * 1. file_get_contents
 * --------------------
 *  - Purpose: Reads a file and returns its content as a string.
 *
 *  - Return Value: Returns the file content as a string or false
 *      on failure.
 *
 *  - Use Case: Used when you need to process or manipulate the
 *       file's content before outputting it or storing it in a variable.
 *
 *  - Key Features:
 *      ** Reads the entire file into a variable.
 *      ** Allows for content manipulation or processing.
 *      **Can read remote files (e.g., URLs) if allow_url_fopen is enabled.
 *
 *  Note:
 *      if you want to add a file using file_get_contents and this
 *      file have include or require script it will execute as a text
 *
 *
 * 2. readfile
 * -----------
 *   - Purpose: Reads a file and directly outputs its contents to the
 *      output buffer.
 *
 *   - Return Value: Returns the number of bytes read on success or
 *     false on failure.
 *
 *   - Use Case: Primarily used when you want to directly send the
 *     file's content to the browser or client without additional
 *     processing.
 *
 *   - Key Features:
 *      ** No intermediate variable is needed; content goes
 *         directly to the output.
 *      ** Useful for streaming files like images, text, or downloads.
 *      ** Cannot store the file's content in a variable for processing.
 *
 *   Example Use Case:
        Outputting an image or serving a file for download
 */