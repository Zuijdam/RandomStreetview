<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Location Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Random Location Viewer</h1>
    <button id="randomLocationBtn">Show Random Location</button>

    <script>
        const randomLocationBtn = document.getElementById('randomLocationBtn');

        randomLocationBtn.addEventListener('click', async function() {
            const response = await fetch('/data/locations.json');
            const data = await response.json();
            const locations = data.locations;

            const randomIndex = Math.floor(Math.random() * locations.length);
            const randomLocation = locations[randomIndex].url;
            window.open(randomLocation, '_blank');
        });
    </script>
</body>
</html>
