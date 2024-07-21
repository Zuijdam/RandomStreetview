<?php

// Read the JSON file
$jsonData = file_get_contents('data/locations.json');
$data = json_decode($jsonData, true);

// Get a random location
$randomLocation = $data['locations'][array_rand($data['locations'])];

// Return the location as JSON
header('Content-Type: application/json');
echo json_encode($randomLocation);
?>