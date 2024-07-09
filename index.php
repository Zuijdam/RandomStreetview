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
        <div id="randomLocation"></div>
        <button id="randomButton">Show me a random location (new tab)</button>

        <script>
            document.getElementById('randomButton').addEventListener('click', function() {
                fetch('data/locations.json')
                    .then(response => response.json())
                    .then(data => {
                        if (data.locations.length > 0) {
                            const randomIndex = Math.floor(Math.random() * data.locations.length);
                            const randomUrl = data.locations[randomIndex].url;
                            document.getElementById('randomLocation').innerHTML = `<a href="${randomUrl}" target="_blank">${randomUrl}</a>`;
                        } else {
                            document.getElementById('randomLocation').textContent = 'No locations found.';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            });
        </script>
    </div>
</body>
</html>
