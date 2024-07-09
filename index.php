<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random URL</title>
</head>
<body>
    <?php
    // Read the JSON data from the file
    $jsonData = file_get_contents('data/locations.json');

    // Decode the JSON data into an associative array
    $data = json_decode($jsonData, true);

    // Get a random URL from the list
    $randomIndex = array_rand($data['locations']);
    $randomUrl = $data['locations'][$randomIndex]['url'];
    ?>

    <iframe src="<?php echo $randomUrl; ?>" width="100%" height="1000px" frameborder="0"></iframe>
</body>
</html>
