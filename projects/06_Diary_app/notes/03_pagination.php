<?php


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


