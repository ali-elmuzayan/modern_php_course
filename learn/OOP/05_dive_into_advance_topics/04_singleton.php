<?php

// note that this is the right you way to use the singleton pattern
class Container
{
    private static ?container $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$container = Container::getInstance();
$container2 = Container::getInstance();
var_dump($container);
var_dump($container2);
