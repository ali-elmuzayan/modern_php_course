<?php

// blade template
/*
 * the view file should contain .blade.php
 * to access it in the route, controller or whatever
 *  - use view() method
 *  - to pass data to the view as the second argument use []
 *    view('name', []) => key and value
 *
 * for security
 *  - all the value that shown will be protected for xss attack using
 *    specialisation to
 *  - to ignore that use {!! !!}
 *
 *
 * route()
 *  - to access the route by it name
 *  - second parameter indicate to the parameter that will pass to
 *    the route
 *
 *
 *
 *
 */

// blade directives:
/*
 * - all directive start with @
 * - used to add dynamic content to your page
 *
 *
 * @isset
 *  => to check if something isset
 *  => @isset() // the code @endisset
 *  => it is not a good practice to use isset everywhere just in case it
 *     needed
 *
 * @forelse()
 *  => instead of using foreach nested on for else you can use this one
 *  => @forelse()  @empty  @endforelse
 *
 */

// layout using template inheritance
/*
 * to inherit
 *  = the parent for example is existed in the layouts folder in
 *    app.blade.php file
 *  => in the parent file add @yield in where you will add tha hole
 *
 *
 * how to extend then:
 *  - @extends('layouts.app')
 *  - @section
 *    => @section // you view @endsection
 *    => @section() you don't need to close it if you don't have html code
 *      ex: @section('title', $task->title)
 *
 *
 */