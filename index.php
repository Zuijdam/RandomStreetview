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
            background-color: #f0f0f0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkAAIAAAoAAv/lPAAAAABJRU5ErkJggg==');
            /* Base64 encoded 1x1 pixel transparent PNG for a subtle pattern */
        }

        .container {
            text-align: center;
            margin-top: 20vh;
        }

        h1 {
            font-size: 2em;
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        button i {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Random Location Viewer</h1>
        <button id="randomLocationBtn">Show Random Location <i class="fas fa-external-link-alt"></i></button>
    </div>

    <script>
        document.getElementById('randomLocationBtn').addEventListener('click', async function() {
            const response = await fetch('/data/locations.json');
            const data = await response.json();
            const locations = data.locations;

            const randomIndex = Math.floor(Math.random() * locations.length);
            const randomLocation = locations[randomIndex].url;
            window.open(randomLocation, '_blank');
        });
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
