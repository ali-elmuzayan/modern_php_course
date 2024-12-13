<?php
// good practice that interface should end with interface word
namespace App\Weather;

interface WeatherFetcherInterface
{
    public function fetch(string $city) : ?WeatherInfo;
}