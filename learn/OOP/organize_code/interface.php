<?php

// interface:
/*
 * an interface allows you to specify contract that a class must implement
 *
 * how to define interface
 *  - using interface keyword
 *    => interface MyInterface {}
 *
 * what it contains:
 *  - it consists of methods that contain no implementation. In other
 *    words, all methods os the interface are abstract methods
 *  - it can also include constants.
 *
 * how to implement it to the class:
 *  - using implements keyword
 *    => class MyClass implements MyInterface
 *
 * interface can implement
 *  - like a class an interface can extend another interface using extends
 *    keyword.
 *
 * Note:
 *  - all the methods in the interface must be public
 *  - a class can implement multiple interface
 *  - when a class implements an interface, it's called a concrete class.
 *    The concrete class needs to implement all teh methods of the interface
 */

// Why should you use PHP interface?
/*
 * - By implementation an interface, the object's caller needs to care
 *   only about the object's interface, not implementations of the object's
 *   methods. Therefore you can change the implementations without
 *   affecting the caller of the interface
 *
 * - An interface allows unrelated classes to implement the same set of
 *   methods, regardless of their positions in the class inheritance
 *   hierarchy
 *
 * - An interface enables you to model multiple inheritances because a
 *   class can implement more than one interface.
 */


// Example:
interface Logger
{
    public function log( $message);
}

class FileLogger implements Logger
{
    private $handle;
    private $logFile;

    public function __construct($filename, $mode = 'a')
    {
        $this->logFile = $filename;
        $this->handle = fopen($filename, $mode) or die("Unable to open file!");
    }

    public function log( $message) {
        $message - date ('F j, Y, g:i a') . ': ' . $message . "\n";
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

// Database
class DatabaseLogger implements Logger
{
    public function log( $message) {
        echo sprintf("Log %s to the database\n", $message);
    }
}

// example 1
$logger = new FileLogger('./log.txt', 'w');
$logger->log('PHP Interface is awesome!');


// Example 2
$loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
];

foreach ($loggers as $logger) {
    $logger->log('Log message');
}


// Note: it is more complex and all of this are seperated in a seperated files