<?php
// JSON uit de lijst
$jsonData = file_get_contents('data/locations.json');

// JSON naar een array
$data = json_decode($jsonData, true);

// Check if data is not empty
if (!empty($data['locations'])) {
    // Display the list of locations
    echo '<ul>';
    foreach ($data['locations'] as $location) {
        echo '<li><a href="' . $location['url'] . '" target="_blank">' . $location['name'] . '</a></li>';
    }
    echo '</ul>';

    // Button to redirect to a random location
    $randomIndex = array_rand($data['locations']);
    $randomUrl = $data['locations'][$randomIndex]['url'];
    echo '<button onclick="window.open(\'' . $randomUrl . '\', \'_blank\')">Show me a random location</button>';
} else {
    echo 'No locations found.';
}
?>
