<?php
declare(strict_types=1);

namespace App\Core;

use Closure;
use ReflectionClass;
use ReflectionNamedType;

class Container
{
    private static ?container $instance = null;
    private array $registry = [];

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set(string $name, Closure $value): void
    {
        self::$instance->registry[$name] = $value;
    }

    /**
     * @throws \ReflectionException
     */
    public function get(string $class_name): object
    {
        if (array_key_exists($class_name, self::$instance->registry)) {
            return self::$instance->registry[$class_name]();
        }


        $reflection = new ReflectionClass($class_name);
        $constructor = $reflection->getConstructor();

        $dependencies = [];

        if ($constructor === null) {
            return new $class_name;
        }

        foreach ($constructor->getParameters() as $parameter) {
            $type = $parameter->getType();
            if ($type === null) {
                exit ("Constructor parameter '{$parameter->getName()}'
                 in the $class_name class has no type declaration");
            }

            if ($type->isBuiltIn()) {

                if (array_key_exists($parameter->getName(), $this->registry)) {
                    dd($this->registry[$parameter->getName()]);
                }
                exit("Unable to resolve constructor parameter 
                '{$parameter->getName()}' of type '$type' in the 
                $class_name class");
            }

            if (!($type instanceof ReflectionNamedType)) {
                exit ("Constructor parameter '{$parameter->getName()}'
                in the $class_name class is an invalid type: '$type'
                - only single named types supported
                ");
            }

            $dependencies[] = $this->get((string)$type);
        }

        return new $class_name(...$dependencies);

    }


}