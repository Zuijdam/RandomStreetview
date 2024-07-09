<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Locations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Random Locations</h1>
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
            echo '<button onclick="window.open(\'' . $randomUrl . '\', \'_blank\')">Show me a random location (new tab)</button>';
        } else {
            echo 'No locations found.';
        }
        ?>
    </div>
</body>
</html>
