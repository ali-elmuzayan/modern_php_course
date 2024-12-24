<?php

namespace App\Core;

use App\Core\Container;

class Dispatcher
{
    public function __construct(private Router $router, private readonly Container $container) {
    }

    public function handle(string $path) :void
    {
        $params = $this->router->match($path);
        if ($params === false) {
            exit("No route found");
        }


        // action and controller from the params
        $action = $this->getActionName($params);
        $controller = $this->getControllerName($params); ;

        $controller_object = $this->container->get($controller);


        $args = $this->getActionArguments($controller, $action, $params);
        $controller_object->$action(...$args);
    }

    private function getActionArguments(string $controller, string $action, array $params):array
    {
        $args = [];
        $method = new \ReflectionMethod($controller, $action);
        foreach ($method->getParameters() as $parameter) {
            $name = $parameter->getName();
            $args[$name] = $params[$name];
        }

        return $args;
    }

    private function getControllerName(array $params):string
    {
        $controller = $params['controller'];
        $controller = str_replace('-', '', ucwords($controller, '-'));
        // temporarily check if the controller Name come from the match pattern
        // add controller to it
        if(!str_contains($controller, 'Controller')) {
            $controller .= 'Controller';
        }

        $namespace = "App\Controller";
        if (array_key_exists('namespace', $params)) {
            $namespace .=  '\\' . $params['namespace'];
        }


        return $namespace . "\\" . $controller;
    }

    private function getActionName(array $params):string
    {
        $action = $params['action'];
        $action = lcfirst(str_replace('-', '', ucwords(strtolower($action), '-')));
        return $action;
    }


}