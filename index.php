<?php

// JSON uit de lijst
$jsonData = file_get_contents('data/locations.json');

// JSON naar een arrau
$data = json_decode($jsonData, true);

// Random er 1tje kiezen
$randomIndex = array_rand($data['locations']);
$randomUrl = $data['locations'][$randomIndex]['url'];

// Redirecten maar
header('Location: ' . $randomUrl);
exit;

?>

