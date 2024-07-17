<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Location Viewer</title>
    <style>
        /* Your existing styles here */
    </style>
</head>

<body>
    <div class="container">
        <h1>Random streetmap locatie!</h1>
        <a id="randomLocationLink" href="#">Verras me! (nieuwe tab)</a>
    </div>

    <script>
        document.getElementById('randomLocationLink').addEventListener('click', function(event) {
            event.preventDefault();
            
            fetch('https://raw.githubusercontent.com/geensnor/DigitaleTuin/master/_data/streetviews.json')
                .then(response => response.json())
                .then(data => {
                    const locations = data.locations;
                    const randomIndex = Math.floor(Math.random() * locations.length);
                    const randomLocation = locations[randomIndex].url;
                    
                    // Use window.location.href instead of window.open
                    window.location.href = randomLocation;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>

</html>
