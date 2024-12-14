<?php

namespace App\Weather;

class WeatherInfo
{
    public function __construct(public string $city,
                                public int    $temperatureK,
                                public string $weatherType)
    {
    }

    function getFethrenheit()
    {
        return round(($this->temperatureK - 273.9) * (9 / 5) + 32);
    }

    function getCelsius(): float
    {
        return round($this->temperatureK - 273.9);
    }

}