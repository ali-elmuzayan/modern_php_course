<?php

class Car
{
    public static string $brand = 'tesla';

    public static function drive(): void
    {
        $brand = self::$brand;
        var_dump("Car::drive has been called, {$brand}");
    }
}

Car::drive();
echo '<br>';
var_dump(Car::$brand);
