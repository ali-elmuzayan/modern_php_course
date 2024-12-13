<?php

// strict_types=1
/*
 * you need to write it everywhere if you want to be strict and not just
 * write it in the bootstrap
 */

// downloading the data is not very easy in the php
/*
 * there are some module to fetch => cURL
 *  - but it is not available in php installation, and you need to write
 *    some commands
 *
 * you can guzzle/guzzle
 *  - but you need to use teh composer
 *
 * there are fsockopen
 *  - which open internet or Unix domain socket connection
 *  - it initiates a socket connection to the resource specified by
 *    hostname
 * Note
 *  - with fsockopen we don't fetch all the data that is why we select
 *    128
 *
 */


// when working with api
/*
 * you should always handle your errors
 *  - you can connect with a server that is not exist then
 *    => fsockopen will generate an error
 *    => so use @ operator to handle that in our case
 *
 * - you should always not trust the code
 * - and add multiple tests for the code
 */
