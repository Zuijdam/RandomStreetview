<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Location Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fbe3e8;
        }

        .container {
            text-align: center;
            margin-top: 20vh;
        }

        h1 {
            font-size: 2em;
            color: #333;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Random streetmap locatie!</h1>
        <a id="randomLocationLink" href="#">Verras me! (nieuwe tab)</a>
    </div>

    <script>
        document.getElementById('randomLocationLink').addEventListener('click', async function(event) {
            event.preventDefault(); // Prevent the default link behavior

            const response = await fetch('/data/locations.json');
            const data = await response.json();
            const locations = data.locations;

            const randomIndex = Math.floor(Math.random() * locations.length);
            const randomLocation = locations[randomIndex].url;

            window.open(randomLocation, '_blank');
        });

        // Add touch event for mobile devices
        document.getElementById('randomLocationLink').addEventListener('touchstart', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            document.getElementById('randomLocationLink').click();
        });
    </script>
</body>

</html>
