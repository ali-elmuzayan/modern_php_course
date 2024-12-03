<?php

// for the connection
/*
 * - first you should know that root user have access to the whole application
 *   so it will be better if you create a specific user for your application
 *
 * How to add a user account
 *  - user accounts
 *  - add user
 *  - host name => localhost (temporarily) any host
 *
 * what is the host name:
 *  -  the host name is where we connected our database
 *  - if you use any host (%)
 *      => write in pdo 127.0.0.1 if it not working write your ip address
 *         and test that (for linux and mac)
 *  - note:
 *   - we have a different ways to connect to our database (linux & mac)
 *     there is one way to connect to the database called socket
 *
 *   - % that mean it means that we need to involve the networking
 *
 *   - you can have the same user name but with difference host
 */

// generate the letters of the alphabet
/*
 * first you should know that all of this letter have a number code
 *  associated to them in the Unicode table
 *
 * - to get the number of a specific letter
 *   => use ord() => $A = ord('A')
 *
 * - to get the letter by it number
 *   => use chr() => chr(63)
 */


// to filter
/*
 * we will use wild cards
 *  Like
 */

// to select unique value => SELECT DISTINCT


// how to pass the pdo into function scope
/*
 * the worst way
 *  - is to include the db file
 *    => why is worst because every time you will create a connection and
 *       you need to exit it
 * second solution:
 *  - passing the pdo as parameter
 *
 * last solution
 *  - is to use global word
 *    => you should avoid to use but in our case it is the best choice
 */


// DB query for overview:
/*
 * group by
 * sum(), avg(), count()
 */


// the sql to create a new name with the database that have all privileges
/*
 CREATE USER 'names'@'localhost'
 IDENTIFIED WITH mysql_native_password BY '***';
 GRANT USAGE ON *.* TO 'names'@'localhost';
 ALTER USER 'names'@'localhost'
 REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0
 MAX_CONNECTIONS_PER_HOUR 0
 MAX_UPDATES_PER_HOUR 0
 MAX_USER_CONNECTIONS 0;
 CREATE DATABASE IF NOT EXISTS `names`;
 GRANT ALL PRIVILEGES ON `names`.* TO 'names'@'localhost';
 */