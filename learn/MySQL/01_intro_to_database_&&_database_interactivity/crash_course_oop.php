<?php
// Manage Zip Files with methods:
/*
 * $zip = new ZipArchive()
 *  - this will compress our zip file
 *
 * $zip->open(filename);
 *  - this allows us to list the files that are in a zip archive
 *
 * $zip->count()
 *  - to get the number of our zip archive;
 *
 * you can use for loop to access this files
 *  - and get the name of the file in this zip
 *      => $zip->getNameIndex($x);
 *
 * or you can get the content (read) from the file by its name
 *      => $zip->getFromName('filename')
 */