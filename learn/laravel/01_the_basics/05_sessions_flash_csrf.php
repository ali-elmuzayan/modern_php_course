<?php


// sessions
/*
 * what is session:
 *  - session is just a way to store data that is specific to users
 *  - and in laravel session will start when the user first visits a
 *    website and it ends when they close the browser or just logout
 *
 *
 * you need to access a session system
 *  - errors is stored in the sessions
 *  - flash messages also used sessions
 *
 * when you visited a laravel application, laravel will generate a new
 * session and assign some unique session id which will stored in the
 * a cookie
 *  - so laravel can recognize the user
 *
 *
 * where session are stored in laravel:
 *  - they are stored inside the storage framework session directory
 *  - it supported different driver that will be used on requests
 *    => you can use file, database, cookie, apc, mam cached, redis,
 *       dynamodb or array
 *    => by default it is stored in a file this work fine if you have one
 *       server which probably is enough for most small applications
 *    => but if your file have multiple server then you cannot store
 *       session in a file, in that case you need to store it a database
 *       like redis
 *  - you can change where to store it in config/session.php file
 */


// errors:
/*
 * to access the errors in the blade template use @error directive with
 * the name of the error
 *  - @error('email')  @enderror
 *  - {{ $errors }}
 */


// flash message
/*
 * to add flash message using with()
 *  redirect()->with('name', 'content')
 *
 * to display a flash message
 *  - use session() object with the name
 *  - but first check if it has the name session()->has('name')
 *
 * note:
 *  - it will appear for one time when refreshing the page it will
 *    disappear
 */


// CSRF:
/*
 * - you need it when displaying forms
 * - by adding @csrf
 * - you need it for post requests
 *
 * why need it?
 *  - to protect your user from the cross site request forgery
 *
 * what if I didn't add it?
 *  - you will get a 419 error
 *
 * can I add exception pages for that?
 *  - yes you can add it in
 *    => middleware/verifyCsrfToken.php
 */