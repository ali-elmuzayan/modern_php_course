<?php
// Note : this is not the right way to use the singleton pattern
use ReflectionClass;

class Container
{
    private static array $registry = [];

    private function __construct()
    {
    }

    public static function set(string $name, Closure $value): void
    {
        self::$registry[$name] = $value;
    }

    /**
     * @throws ReflectionException
     */
    public static function get(string $class_name)
    {

        if (array_key_exists($class_name, self::$registry)) {
            return self::$registry[$class_name]();
        }

        $reflection = new ReflectionClass($class_name);
        $constructor = $reflection->getConstructor();

        $dependencies = [];

        if ($constructor === null) {
            return new $class_name;
        }

        foreach ($constructor->getParameters() as $param) {
            $type = $param->getType();

            if ($type === null) {
                exit ("Constructor parameter '{$param->getName()}'
                 in the $class_name class has no type declaration");
            }


            if ($type->isBuiltIn()) {
                exit("Unable to resolve constructor parameter 
                '{$param->getName()}' of type '$type' in the 
                $class_name class");
            }

            if (!($type instanceof ReflectionNamedType)) {
                exit ("Constructor parameter '{$param->getName()}'
                in the $class_name class is an invalid type: '$type'
                - only single named types supported
                ");
            }

            $dependencies[] = self::get((string)$type);
        }

        return new $class_name(...$dependencies);
    }
}