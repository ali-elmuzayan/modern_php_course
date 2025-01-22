<?php

// blade template
/*
 * the view file should contain .blade.php
 *  => index.blade.php
 *
 * to access it in the route, controller or whatever
 *  - use view('index') method
 *
 * to pass data to the view as the second argument use []
 *  - view('name', ['name' => $name, 'a', $ages]) => key and value
 *      => you can pass it as different variable name to the blade
 *  - view('name', compact('name')) and pass the name of tha variable
 *      => but the variable should have the same name in the blade
 *
 *
 * for security
 *  - all the value that shown will be protected for xss attack using
 *    specialisation to
 *  - to ignore that use {!! !!}
 *
 *
 * route()
 *  - this method will be used in the blade, and it will return the route
 *    value by it name
 *  - second parameter indicate to the parameter that will pass to
 *    the route
 *  - route('products.show', $product->id)
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
 *  => in the parent file use @stack to push something like js code
 *     or css in case it needed
 *
 *
 * how to extend then:
 *  - @extends('layouts.app')
 *  - @section
 *    => @section // you view @endsection
 *    => @section() you don't need to close it if you don't have html code
 *      ex: @section('title', $task->title)
 *  - @push
 *    => ot push in the @stack that exist in the parent blade
 *
 *
 *
 */


// create and edit
/*
 * this to forms should have @csrf
 *  - to protect it from the malicious users
 *
 * @method
 *  - to change the method for example with edit you need to use
 *    PUT method
 *      => @method('PUT')
 *  - and with destroy you need to use DELETE method
 *      => @method('DELETE')
 *  - Note:
 *      => the form should be of type post method when using those
 *         methods
 *
 */

// how to make a reusable view
/*
 * you can do that using @include
 *
 * example
 *  - a form that is used in create task and edit task form
 *  -> it is easy because in edit it has $task so you can handle
 *     that by check  @isset($task) change the title and
 *
 * Note:
 *  - this way is okay when the form is typical in both but a little
 *    change is there
 */

// to add class in a specific condition
/*
 * @class
 *   => @class(['font-bold','line-through' => $task->completed])
 *   => you can add multiple class not just one class
 */