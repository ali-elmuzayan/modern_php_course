<?php

// when not using use operator
/*
 * when you are not in the namespace or class which mean like in index for
 * example
 */

// how to handle not found 404
/*
 * it is not best practice to handle error like not found 404
 * in the index but create a controller for that and then initialize
 * an instance
 */

// all request go to index
/*
 * we create the app so all the requested will redirect to the index
 * and from there we will handle the project
 *
 * - require all functions that exist in the inc by the 'bootstrap' file
 *   or 'all' file this file should require all the files that is needed
 *   for the project
 */

// when you use OOP
/*
 * try to ignore the stand alon functions
 */

// What awaits you ?
/*
 * - App\Frontend\Controller\PagesController
 *   =>Here, the request is processed and teh page is rendered
 *
 *   - PagesController::showPage(string $pageKey)
 *      - This idea is that we pass a page to this function
 *      - This page will then be displayed in the frontend
 *      - Example:"index" stands for the start page
 *        Or "contact will refer to the contact page
 *   - also:
 *      - The PagesController extends our AbstractController. This will
 *        allow us to reuse our render() function!
 *
 * - App\Model\PageModel:
 *   => Represents a single entry in our database
 *
 * - App\Repository\PagesRepository:
 *    => represents the repository for our pages, meaning what we want
 *       to do with the database ( such as fetching entries,
 *       fetching a single entry,...)
 */

// Notes:
/*
 *
 * - don't use a hyperlink when you want to change on the database
 * - in case you want it to look like a link just style it with css
 */