<?php
// PHP: Reading folders & Files
/*
 * In this chapter
 *  - We will explore how to read directories
 *  - And how you can read files:
 *    - Check if they exist
 *    - Check their file extension
 */


// Utilize 'opendir', 'readdir' and 'closedir' for directory management
/*
 * get the file throw our images folder
 *  $handle = opendir(__DIR__ . '/images') // to open the directory
 *   - this is a data type called =>  resource => of type stream
 *
 * to read the resource:
 *   - readdir($handle) // to read the resource
 *      => use it to read files in the directory one by one until there
 *         is no file in the directory
 *      => then it will return "false"
 *
 * then close dir (closedir())
 *  - this is best practice if you forget it php will return the folder
 *    to the operating system in one case, will do that automatically
 *
 *  - because when php opens directory for us, it tells this to the
 *    operating system, and if we use closed here, then PHP can give
 *    those resources back to the operating system
 *
 */


// pathinfo()
/*
 * will return information about the directory, basename, extension, and
 * filename if the file doesn't exist will do the same
 *
 * flags
 *  - PATHINFO_EXTENSION
 *  - PATHINFO_DIRNAME
 *  - PATHINFO_BASENAME
 *  - PATHINFO_FILENAME
 */

// file functions: file_exists(), is_file(), is_dir(), filemtime(),
//  filesize(), ...
/*
 * file_exists()
 *  - to check whether a specific file exist
 *  - will return bool
 *  - if you pass a folder and this folder exist it will return true
 *    => folder is also a file in linux, so folder is just a specific
 *       types of files, to check if it folder or file
 *
 * is_file
 *  - to check if the file is file or folder
 *
 * is_dir
 *  - to check if the dir is directory
 *
 * filesize
 *  - to get the size of the file in bytes
 *  - you can divide it in 1024 to get KB
 *
 */