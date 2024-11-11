<?php
// note 1:
/* if this page doesn't have php and it is have a content so why includeing them
 *instead we can use file_get_contents
 */


//note2:
/*
 * if you doesn't handle the code the user might get access in
 * some secret file by including or by file_get_contents that you added to
 *  => so if you have included or getting content just make the code post,
 *      but the post will not help our security in this case
 *
 */


// note3: (is the value acceptable or not)
/*
 * also user can access the html code by inspect and change its value
 * which will damage the code even if it posts method
 *  => so create array that contain the value that exist
 *      and then check if the value user add is exist in the array
 * => also by this you don't to make the method post and let it get a
 */

// important:
/*
 *  - you should always check the input that user added also handle it
 *  - you should always check the output you print in tha page ans sanitize it
 */