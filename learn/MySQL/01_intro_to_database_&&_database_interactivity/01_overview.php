<?php

/*
 * Why?
 * ----
 *  - quite often, we want to do almost the same: CRUD
 *      - Create: create data
 *      - Read: Read data
 *      - Update: update data
 *      - Delete: delete data
 *
 *  Also: we would like to be able to filter, sort & group the data
 *  Additional requirements:
 *      - The database must be kept consistent
 *      - We need to prevent simultaneous writes
 *      - We must avoid simultaneous updates
 *
 *  If we now store our data in individual files... this all becomes
 *  extremely difficult to program that's why we use database
 *
 * Note:
 *  - when application are there are multiple users using our website in
 *    the same time so our application will use multiple php application
 *  - they all will be able to access the same database in the same time
 *
 *
 * Which database system?
 *  - We could choose between many of them like MySQL / MariaDB
 */


// Export and Import
/*
 * import:
 *  - just select the file you want to import
 *  - be ensure they have the same format as you determine
 */

// Connecting to DB:
/*
 *  - So far, we were able to use phpmyadmin to access our database
 *  - Internally, phpmyadmin wrote the database queries (in SQL) for us
 *  - The database was then providing the data to php my admin
 *  - We will start writing database queries on our own
 *  - We will now:
 *      - create a table ("notes") through phpmyadmin && Insert data into it
 *  - After that:
 *      - we will then connect to this database from PHP
 *      - and read the notes into PHP - from the database!
 *
 *
 *  Note:
 *  - When create the database
 *      - utf8mb4_general_ci
 */