<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Methods: *');
header('Access-Control-Max-Age: 3600');
header('Access-Control_Allow-Headers: *');
$data = [
    'Name' => 'Ali Ahmed',
    'Email' => 'Ali.ahmed@gmail.com',
];
$JSON_data = json_encode($data);

// send the data when teh condition is acceptable
// if the condition is true show error
// by the query
// => index?key=pass&username=ali
// then check those in the php

if (isset($_GET['key']) && $_GET['key'] === 'pass') {
    print_r($JSON_data);
} else {
    $JSON_data = json_encode(['message' => 'خطأ في الطلب']);
    print_r($JSON_data);
}