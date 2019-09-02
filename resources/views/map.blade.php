<!DOCTYPE html>
<html>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    var map;
    function initMap() {

        // voeg hier de center van de map toe
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 51.598897799999996, lng: 4.7735023},
            zoom: 8
        });

        // voeg hier je markers toe die je wilt.
        var marker = new google.maps.Marker({
            position: {lat: -34.397, lng: 150.644},
            map: map,
            title: 'This is the center of the map'
        });

        var marker = new google.maps.Marker({
            position: {lat: -35.397, lng: 152.644},
            map: map,
            title: 'This is somewhere in the sea nearby...'
        });

        var marker = new google.maps.Marker({
            position: {lat: 51.598897799999996, lng: 4.7735023},
            map: map,
            title: 'This is somewhere north of the center'
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUF2YHjV8Z0quTDM5Gho29AHVnwsilPNs&callback=initMap"
        async defer></script>
</body>
</html>

