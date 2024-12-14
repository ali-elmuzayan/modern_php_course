<?php
// The container Pattern: streamline Dependency Management
/*
 * - this approach will allow us to scale and to implement
 *   an actual application
 *
 * What is the problem;
 *  - id you design a class and that class have an construct class
 *    which need 2 arguments everytime you initialize this class
 *    => like repository class in the example
 *    => and a controller class that need this repository class
 *       in the constructor
 *    => so everytime you create the controller you need to create
 *       repository and this repository need the arguments
 *    => so if something change in the class you need to change it every
 *       where
 *    => and you cannot just create the repository everytime you need
 *       the controller.
 *    => so when the application grows you will initialize an instance
 *       that we will never, or maybe using them later
 *
 * To solve that;
 *  - you can create a container class
 *    => the container is just there to manage our instances
 *    => for example the container will contain function that
 *       get the post repository
 *    => and also a function to get the controller
 *
 *  - so you will create it one time only, and you don't repeat your
 *    code over and over
 *  - and if there is anything to change the class it self you can change
 *    it directly in the container
 *
 * another problem we might faced:
 *  - that the container should remember something
 *  - everytime you use that you will create a new repository and a new
 *    controller
 *
 * to solve that problem:
 *  - add properties
 *  - and check in the function if it not empty
 *
 * the key
 *  - reusing existing instances here is the key for an efficient app
 */

// weave external data into closures (use keyword)
/*
 * - you can use 'use' keyword to use global function in the anonymous
 *   function
 * $hi = 'hello mr ' . $user
 * $welcome = function() use($hi) {
 * echo 'hi';
 * echo 'hi';
 * echo 'hi';
 * }
 *
 */

// bind():
/*
 * that is why we need bind function:
 *  - because we should make the recipes array as private
 *  - and you cannot declare the recipes closure in the constructor
 *
 *  - This mehtod is used to register a "recipe" ( a closure) for creating
 *    an instances of a specific class or object. The 'recipe' defines how
 *    the instance will be constructed when needed
 *
 */


// Role of recipes:
/*
 * Recipes are closures that define how to construct the instance. They
 * are executed only when an instance is requested and doesn't already
 * exist in the $instances array
 *
 */


// best describes to the container Pattern?
/*
 * - it acts as a centralized manager for dependency injection, it is
 *   responsible for binding dependencies and retrieving instances
 *   of objects
 *
 * - The container Pattern centralizes the creation and lifecycle
 *   management of objects, promoting system flexibility and maintainability
 *   through a design that minimizes tight coupling. It supports
 *   dependency injection a process where an object's dependencies are
 *   provided to it from the outside, rather than the object creating them
 *   itself, enhancing modularity and testability
 */

// utilize return values in a file inclusion
/*
 * if you include a file that have a return value in the global
 * it will be returned if you assign it to a variable or dump it
 * while if you access it directly nothing going to happen
 */