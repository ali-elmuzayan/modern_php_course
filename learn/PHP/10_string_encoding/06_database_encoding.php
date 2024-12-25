<?php
// The critical rule of utf8mb4 in mysql:
/*
 * when creating the database:
 *  - you should give it a name
 *  - and select the database encoding: (collation)
 *     - by default it will be utf8-unicode-ci with hosters
 *     - but we are going to use  utf8mb4-general-ci
 *
 * uft8-unicode-ci;
 *  - with it some emoji will work and other will not
 *    => the reason is mysql when utf8 become more popular they implement
 *       with maximum 3 bytes char because 4 bytes is not commonly use
 *
 *
 * how to solve those problem:
 *  - by change the collation to utf8mb4-general-ci
 *
 * when try to connect to the database by the php script:
 *  - 'mysql:--;--;charset=utf8mb4'
 *
 */


// Collations in MySql: Uncover the impact of sorting and searching
/*
 * by changing the collation:
 *  - the sort order will change
 *
 * NOte:
 *  - this depending on Whom the website is for
 *
 * ci:
 *  - stands for case in sensitive
 *  - it effect with sorting and searching
 *
 * if you want to change just for a single query
 *  - add COLLATE
 *    => SELECT * FROM `cms` WHERE `title` = `b` COLLATE utf8mb4_bin;
 *
 */