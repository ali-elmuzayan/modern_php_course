<?php
// add the domain here to allow the website to access the api
// if you use * then you allow to all to access the api
header('Access-Control-Allow-Origin: *');

// to allow arabic character and other language character
// also to allow data of type JSON
header("Content-Type: application/json; charset=UTF-8");

// this part to determine ways to access the API
header('Access-Control-Allow-Methods: *');

// indicate to the time of storing the result
// when asking for the test temporarily
// for caching // it will delete the data after this time from caching
header('Access-Control-Max-Age: 3600');

// give the authentication to the browser to exchange data without errors
header('Access-Control_Allow-Headers: *');

// for the post  file_get_contents("php://input");