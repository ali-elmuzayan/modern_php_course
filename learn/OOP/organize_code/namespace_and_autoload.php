<?php
// Namespaces:
/*
 * - Each class name may only exist once
 * - This has been sufficient for our projects now so far
 * - But when our application grows, the code will become more and more
 *   difficult to manage
 * - This is especially true if we develop an PHP application as a team
 *
 * To solve this
 * ---------------
 * - We can divide our classes into namespaces
 *
 *
 * Define a namespace:
 * -------------------
 * - to define a namespace, you place the namespace keyword followed by
 *   a name at the very top of the page.
 *
 *
 * How to call the class then
 * --------------------------
 * - first require that class
 * - $admin = new Admin/User()
 *
 *
 * Import namespace:
 * -----------------
 * - to avoid using the fully qualified names from a namespace, you can
 *   import the namespace with the use operator like this:
 *   => use Store\Model
 *      $customer = new Model\Customer('');
 *
 *
 * Import a class form a namespace:
 * --------------------------------
 * - PHP allows you to import a class from a namespace instead of
 *   importing the namespace
 * - by "use" operator to import the class from the namespace
 * - use Admin\User
 *
 *
 * if you import 2 classes with the same class name:
 * -------------------------------------------------
 * - you can import it by the namespace
 * - or you can use the use operator but then add alias
 *    => import namespace\className as newClassName;
 *
 *
 * Use classes from the global namespace:
 * -----------------------------------
 * - to use global classes such as built-in classes or user-defined
 *   classes without a namespace,
 * - you need to precede the name of such classes with a backslash(\)
 *    => namespace App;
 *       $publish_at = new \DateTime();
 *
 * Class name as string or check if it instance of the class:
 * --------------------
 * - className::class
 *    this will return the class name as a string
 * - get_class()
 *   this also return the class name as a string of the instance
 * - check if it instance of the class
 *   $client instanceof Client
 *
 * Note:
 * ----
 * - if you try to access a class from the same namespace so you need
 *   to import. you can access it directly.
 *
 * - in case you will import by use operator and you already in a specific
 *   namespace, then use operator should be written after define the
 *   namespace and not before
 *
 * - if want to use a class directly without importing it you need to use
 *   (\) before the class and namespace
 *    => \Admin\user
 */

// autoload
/* what is the autoload function do?
 *  - it is said whenever the class is used just require it directly
 *  - you need to replace the (\) in the class to (/) as it is exist in
 *    the filename
 *
 * you should register it
 *  - passing the function to spl_autoload_register();
 *
 * Note:
 * - for autoload to work good you should follow the naming convention
 * - but it doesn't care about lower or upper case, while on linux system
 *   it will care about that
 */
//function autoload($class) {
//    $filepath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
//    if(file_exists($filepath)) {
//        require_once $filepath;
//    }
//}
//
//
//spl_autoload_register('autoload');

//spl_autoload_register(function ($class) {
//    $filepath = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
//    if (file_exists($filepath)) {
//        require $filepath;
//    }
//});

// adopt PSR-4 namespacing:
/*
 * we should prefix everything or all of our namespaces here with "app\"
 *  - to make it clear that this part here is part of our application
 *    and not any third party
 *
 * PSR-4:
 *  - is moving PHP forward through collaboration adn standards
 */
