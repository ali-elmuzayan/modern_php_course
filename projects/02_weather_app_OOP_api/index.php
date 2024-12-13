<?php

//use App\Weather\FakeWeatherFetcher;
//use App\Weather\RandomWeatherFetcher;
use App\Weather\RemoteWeatherFetcher;

require_once __DIR__ . '/data/data.php';
require_once __DIR__ . '/inc/bootstrap.inc.php';

// default values
$backgrounds = null;
$largeImage = null;


//$fetcher = new RandomWeatherFetcher();
//$info = $fetcher->fetch('cairo');

$remoteFetcher = new RemoteWeatherFetcher();
$info = $remoteFetcher->fetch('cairo');

//Check the data and sanitize it to define the value
if (isset($backgrounds_data[$info->weatherType])) {
    $backgrounds = $backgrounds_data[$info->weatherType];

}
if (isset($largeImage_data[$info->weatherType])) {
    $largeImage = $largeImage_data[$info->weatherType];

}


require_once __DIR__ . '/views/index.view.php';