<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Streetview Location</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fbe3e8;">
    <div style="text-align: center; margin-top: 20vh;">
        <h1 style="font-size: 2em; color: #333;">Random Streetview Locatie!</h1>
        <a id="randomLocationLink" href="#" style="display: inline-block; padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px;">Verras me!</a>
    </div>

    <script>
        document.getElementById('randomLocationLink').addEventListener('click', function(event) {
            event.preventDefault();
            
            fetch('https://raw.githubusercontent.com/geensnor/DigitaleTuin/master/_data/streetviews.json')
                .then(response => response.json())
                .then(data => {
                    const locations = data.map(item => item.streetview);
                    const randomIndex = Math.floor(Math.random() * locations.length);
                    const randomLocation = locations[randomIndex];
                    
                    if (randomLocation) {
                        window.location.href = randomLocation;
                    } else {
                        console.error('No valid streetview URL found');
                    }
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
