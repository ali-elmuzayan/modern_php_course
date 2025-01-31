<?php

// inside the routing folder
/*
 * What routes actually are
 *  - the routing is a process of directing the user requests which take
 *    the form of URLs and return a response
 *
 * to specify a page use get
 *  - Route::get()
 *
 * what it have:
 *  - it have the route name and the action
 *    => which is the url
 *    => and the action will happen either the action is dealing with the
 *       database or showing the page.
 *
 * to define a parameter in the route name:
 *  - get('/pages/{name}', function($name) {});
 *    => this is useful of you need to read something from the database
 *    => this how to add dynamic part to your urls
 *
 * Note:
 * - the order of routes is matter
 *
 */

// http:
/*
 * by using the browser, it knows how to communicate with the web server
 * by http
 *
 * http protocol methods:
 *  - get    => to get documents
 *
 * dangerous methods:
 *  - post   => to submit data
 *  - put    => to update data
 *  - delete => to delete data
 */

// objects tha will help;
/*
 * to redirect
 * redirect()
 *
 * to redirect with the route name
 * redirect()->route();
 */

// named routes
/*
 * - give a name to your route to make it easy to access it
 *
 * how to use: by add ->name()
 * Route::get()->name();
 */

// not exist URL
/*
 * Route::fallback(closure)
 *
 * if the user access a not exist url then it will return 404 page
 * to set a specific page for that
 *  - Route::fallback(function () {})
 */

// route naming
/*
 * lets take pages as example:
 *  - pages.index =>refer to a list of pages
 *  - pages.show  => to show a specific a page
 */

// if you will use route for displaying a view only
/*
 * Route::view('/tasks/create', 'view/name')
 */