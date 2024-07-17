<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Location Viewer</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fbe3e8;">
    <div style="text-align: center; margin-top: 20vh;">
        <h1 style="font-size: 2em; color: #333;">Random streetmap locatie!</h1>
        <a id="randomLocationLink" href="#" style="display: inline-block; padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px;">Verras me! (nieuwe tab)</a>
    </div>

    <script>
        document.getElementById('randomLocationLink').addEventListener('click', function(event) {
            event.preventDefault();

            fetch('/data/locations.json')
                .then(response => response.json())
                .then(data => {
                    const locations = data.locations;
                    const randomIndex = Math.floor(Math.random() * locations.length);
                    const randomLocation = locations[randomIndex].url;

                    window.location.href = randomLocation;
                })
                .catch(error => console.error('Error:', error));
        });

        // Add hover effect
        var link = document.getElementById('randomLocationLink');
        link.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#0056b3';
        });
        link.addEventListener('mouseout', function() {
            this.style.backgroundColor = '#007bff';
        });
    </script>
</body>

</html>