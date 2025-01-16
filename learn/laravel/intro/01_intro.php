<?php
// to install laravel
/*
 * 1- you should have a php in your environment & composer
 *
 * 2- if you install laravel installer
 *    => laravel new example-app
 *
 * 3- if you don't have laravel installer
 *    => composer create-project laravel/laravel example-app
 *    => Note: you should connect to the internet
 *
 * 4- to install the laravel installer
 *    => composer global require laravel/installer
 */


// collect
/*
 * you can use it to convert an array to a collection object
 *  - by that you can use some function like adding or finding
 *
 * $task = collect($tasks)->
 *
 */

// to send response:
/*
 * abort(response::HTTP_NOT_FOUNT)
 *  => use Illuminate\Http\Response
 *
 *
 * now you can search with:
 *  - firstWhere()
 *
 */


// old()
/*
 * why need it:
 *  - for example when the use enter the value and it is not correct the
 *    request will redirect it back and show the error if it doesn't used
 *    then the previous value will disappear
 *
 * example
 *  old('name') => name of the input
 *
 * Note:
 *  - old only works with forms that is use the post method not get
 *  - don't use old with sensitive info like password
 */


// adding pagination
/*
 * - using pagination so you don't need to display all the entities
 *   you have, which will take to0 much space, and it's pretty hard
 *   to navigate
 * - instead we need to use paginate
 *
 *
 * how to do that
 *  - to show all the entities with paginate
 *    => $data = TheModel::latest()->paginate(//amount of item per page)
 *    => in case you don't pass amount of item it will be 15 by default
 *
 *  - in the blade
 *    => {{$data->links()}}
 *
 *
 *
 * to show it with bootstrap
 *  - in the appServiceProvider =>
 *  - Paginator::useBootstrap()
 *
 */