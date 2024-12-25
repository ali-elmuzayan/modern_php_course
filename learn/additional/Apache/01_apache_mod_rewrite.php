<?php

// Note:
/*
 * with all of this examples
 *  - you need to have .htacces file
 */


// clean URL with mod_rewrite in apache
/*
 * the code:
 * RewriteEngine On
 * RewriteRule "image\.jpg" "peals.jpg"
 *
 * What is this code will do?
 *  - line one to enable rewrite mode
 *  - this will open this file 'peals.jpg' when you call this route
 *    'image\.jpg' without changing the name of this file to match
 *    the route name
 *
 *
 * Note:
 *  - image.jpg  => written as image\.jpg because this is a regular
 *    expression
 *
 *  - if the path will contain image.jpg then it will work good even if
 *    there is something before or after
 *
 *  - to be more strict: to start '^' and end '$'
 *    '^image\.jpg$'
 *
 *  - to access all images:
 *    "^.*\.jpg$"
 */


// Direct Images with conditions and expressions:
/*
 * add to the code
 * RewriteCond
 *
 * example;
 * RewriteEngine On
 * RewriteCond ${REQUEST_FILENAME} !_f
 * RewriteCond ${REQUEST_FILENAME} !_d
 * RewriteRule "^.*\.jpg$" "peals.jpg"
 *
 *  - that mean in case the file is not exist access the specific rule
 *    and it is also not be a directory
 *
 * note;
 *  - you can have multiple conditions
 *  - you can add [OR] to add logical to the condition
 */


// Redirect Request:
/*
 *
 * Note:
 *  - the browser doesn't know anything about the rewriting that happens
 *    on the server
 *  - and you can access the redirect data with
 *    $_SERVER
 *
 * but you will face a problem to link your style.css
 *  - to solve that you need to add the full path of the style file
 *    or other files
 */


// Exploring the documentation of mod rewrite
/*
 * search on
 *  - mod rewrite apache
 *
 * you will find:
 *  - RewriteBase Directive
 *    => sometimes required on shared hosters, otherwise it doesn't work
 *
 *  - check for http headers, or Ip addresses
 *  - check for certain time
 *  - check for https
 *
 *  - how to access environment variables
 *
 *  - you can perform various file attribute tests;
 *      -d, -f, -F, -h, -l
 */