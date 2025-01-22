<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Allow cross-origin requests (if required)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

// Ensure the request is a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode([
        "success" => false,
        "message" => "Only POST requests are allowed."
    ]);
    exit;
}

// Get the raw POST data
$rawInput = file_get_contents("php://input");

// Attempt to decode the JSON payload
$data = json_decode($rawInput, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400); // Bad Request
    echo json_encode([
        "success" => false,
        "message" => "Invalid JSON payload."
    ]);
    exit;
}

// Validate the required fields
if (empty($data['username']) || empty($data['age'])) {
    http_response_code(422); // Unprocessable Entity
    echo json_encode([
        "success" => false,
        "message" => "Both 'username' and 'age' fields are required."
    ]);
    exit;
}

// Process the data (example)
$username = htmlspecialchars($data['username']);
$age = (int)$data['age'];

// Create a response
$response = [
    "success" => true,
    "message" => "Data received successfully.",
    "data" => [
        "username" => $username,
        "age" => $age
    ]
];

// Send the JSON response
http_response_code(200); // OK
echo json_encode($response);
