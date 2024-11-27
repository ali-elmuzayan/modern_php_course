<?php

// for integrity:
/*
 * - casting the value => (string)
 * - check with null operator to set default value => ?? '';
 *
 * - sql injection => bindValue
 */


// pagination
/*
 * - first you need to sort the data by the date column, id or ....
 * - if the equal in the first order you need them to be order by other.
 * - you need to set a limit => limit 5;
 * - you need to offset for pagination => offset 10;
 *
 *  => SELECT * FROM `entries` ORDER BY `date` DESC, `id` DESC;
 *
 * note:
 *  - if you bind a value that value will bind as a string value
 *  so you need to add this flag PDO::PARAM_INT
 *
 * 2) hide pagination
 *  - if the number of items is less than or equal to what one page can hold,
 *    why have pagination? hide it.
 *  - also, ensure that the $_GET['page'] or offset cannot be changed by the user
 *    manually.
 *
 */




// Dates
/*
 * to get the time:
 *  - time() // unix timestamp => 1st quandary 1970 => numbers => 4bytes
 *  - microtime(true) => with micro seconds
 *      - you can use it to check the time opacity like
 *      => start = microtime(true) ;  // the code
 *      => end = microtime(true);
 *      => then echo $end - $start to get the result
 *
 *  - mktime(hours, minutes, seconds, months, day, years )
 *      => you should pass the values
 *
 * to set the time zone
 *  - date_default_timezone_set();
 *      => 'America/New_York'
 *
 * to get the current date
 *  - date('')
 *      => 'Y-m-d H:i:s'
 *  - try this date('Y-m-d H:i:s', time());
 *  - search about that to custom format
 *      => DateTimeInterface::format() format
 *
 *
 * to turn time to time stamp
 *  - strtotime()
 *  =>
 */

// change the date format in our project:
/*
 * - turn the date come form the database value  into timestamp use strtotime
 * - then turn it into date wiht the new format
 */



// upload files:
/*
 * where to get the actual file data
 *  - $_FILES contain all files with key name and value array of data
 *      => 'name': filename
 *      => 'full_path'
 *      => 'type': type of the file
 *      => 'tmp_name' : is where we can access the file
 *      => 'error'
 *      => 'size'
 *
 *
 * move file with move_uploaded_file()
 *  - move_uploaded_file(file in tmp_name', to the new path)
 *
 * Note:
 *  - a post form is submitted in a way that is it doesn't support
 *    file transfer, so you need to add
 *    => encrypt="multipart/form-data" to form
 *
 *  - when move uploaded file() and see a problem wti
 *    in web hosted so you need to use an FTP
 *
 */
//to check
if (!empty($_FILES) && !empty($_FILES['images'])) {
    if ($_FILES['images']['error'] == 0 && $_FILES['images']['size'] > 0) {
        move_uploaded_file($_FILES['images']['tmp_name'], __DIR__ . "/images/" . $_FILES['images']['name']);
    }
}

// upload file protection:
/*
 * if you provide a file with the name it could be in the control by
 *  the user so you need to change the name each time and make it special
 *  so it will not repeated twice.
 *
 * how
 *  - by change the name with new and unique name
 *    => time() .jpg
 *  - or you cna use this pattern to change anything other words
 *    => preg_replace('/[^a-zA-Z0-9]/', '', $_FILES['']['']
 * - or you can use the file without the extension also need regex
 *    => pathinfo(value,PATHINFO_FILENAME)
 *
 *
 *
 * other problem that the file uploaded twice
 *  - you can use time()
 *  - uniqeid()
 */

if (!empty($_FILES) && !empty($_FILES['images'])) {
    if ($_FILES['images']['error'] == 0 && $_FILES['images']['size'] > 0) {
        $fileWithoutExt = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
        $fileName = preg_replace('/[^a-zA-Z0-9]/', '', $fileWithoutExt);
        move_uploaded_file($_FILES['images']['tmp_name'], __DIR__ . '/images/'. $fileName . '-'. uniqid() . '.jpg');


    }
}

// example of what malicious can do:
/*
 * - could upload file phpinfo.php then access it
 *      this file of type text/php
 *      => so you can prevent all the type but they can do something to it too
 *
 * - the image file itself could have a text you need to rid of it
 *   you can check that by rename it to txt
 *      => you need to scale the file
 */
