<?php
// session
/*
 * - to use session first you need to call
 *   start_session();
 *
 * - session then will be available as empty array if you use it without
 *   start_session() it will not work
 *
 * - when using it will create additional cookie which will automatically
 *   generated, which is contained PHPSESSID
 *
 * - it is like a file when you add something even if you commit the code
 *   it will still be stored in the session variable
 *
 * - session store in the
 *   session.save_path => /Applications/--/--/temp
 *   in our case => C:/laragon/tmp
 *
 * - session are a mechanism that we have this array, and it shared
 *   between requests
 *
 * - if the user try to manipulate the session nothing will happen,
 *   and the actual data never leaves our server
 *
 * - when the browser is closed, then also the browser forgets about the
 *   PHP session ID
 *
 * - in some point the PHP will clean up the files in our temporary folder
 *
 * Note;
 * - the session is an extremely great mechanism that allows us to store data
 *   in kind of like a file
 */

// Security
/*
 * - the attacker could copy the PHP session ID and just to pretend to be
 *   me
 *
 * - to protect that don't use public wifi, and use https the communication
 *   then will be encrypted
 *
 * - session_generate_id()
 *   => it say that we want to keep the current session, but we want to
 *      change our session ID to a new one
 *
 * - so now if the attacker have the previous sessionID after logging in,
 *   if I use session_generate_id() then I now have a different session ID
 *
 * -  this function is what we should execute everytime that something
 *    major happens with our session, specially like login logout
 *
 *
 *
 *
 */
phpinfo();