
@if (Route::has('login'))
    <div class="top-right links">
        @auth
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

                var map, infoWindow, userMarker;//, mapMarkers;
                var activeMarkers = [];
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: -34.397, lng: 150.644},
                        zoom: 6
                    });
                    infoWindow = new google.maps.InfoWindow;


                    // Try HTML5 geolocation.
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };

                            // infoWindow.setPosition(pos);
                            // infoWindow.setContent('Location found.');
                            // infoWindow.open(map);
                            map.setCenter(pos);

                            userMarker = new google.maps.Marker({
                                position: pos,
                                title : "dit bent u",
                                map: map
                            });


                        }, function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                        });
                    } else {
                        // Browser doesn't support Geolocation
                        handleLocationError(false, infoWindow, map.getCenter());
                    }
                }

                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
                    infoWindow.open(map);
                }

                function updateMarkers(markers){

                    activeMarkers.forEach((marker) => {

                        marker.setMap(null);
                    });
                    activeMarkers = [];

                    for (var i = 0; i < markers.length; i++)
                    {

                        var myLatLng = new google.maps.LatLng(markers[i]['lat'],markers[i]['lng']);
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            title : markers[i]['name'],
                            map: map });

                        activeMarkers.push(marker);
                    }
                }

                function setMarkers(){

                    navigator.geolocation.getCurrentPosition(function(position) {
                        var markers;
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        userMarker.position = pos;
                        console.log(userMarker);
                        fetch(`http://localhost:8000/marker?lat=${pos.lat}&lng=${pos.lng}`)
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(markersServer) {

                                markers = markersServer;

                                this.updateMarkers(markers);
                            });
                    });
                }

                setInterval(function() { setMarkers(); }, 1000);
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAetzx8_ThHXS5KrLojrf3VqfHyHrSqHpc&callback=initMap"
                    async defer></script>


            {{--<script>--}}
                {{--$(document).ready(function() {--}}
                    {{--<!--#my-form grabs the form id-->--}}
                    {{--$("#form").submit(function(e) {--}}
                        {{--e.preventDefault();--}}
                        {{--$.ajax( {--}}
                            {{--<!--insert.php calls the PHP file-->--}}
                            {{--url: "mapController.php",--}}
                            {{--method: "post",--}}
                            {{--data: $("form").serialize(),--}}
                            {{--dataType: "text",--}}
                            {{--success: function(strMessage) {--}}
                                {{--$("#message").text(strMessage);--}}
                                {{--$("#my-form")[0].reset();--}}
                            {{--}--}}
                        {{--});--}}
                    {{--});--}}
                {{--});--}}
            {{--</script>--}}

            <form id="form" hidden action="{{ route('map.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="latitude" hidden>Vul hier de latitude in</label>
                    <input class="input" hidden type="text" name="latitude" id="latitude" required>
                </div>

                <div class="form-group">
                    <label for="longitude" hidden>Vul hier de longitude in</label>
                    <input class="input" hidden type="text" name="longitude" id="longitude" required>
                </div>
                <div class="form-group">
                    <input class="button" hidden type="submit" value="Locatie opslaan">
                </div>
            </form>
            <script>


            </script>
            </body>
            </html>
            @else
            <a href="{{ route('login') }}">Login</a>
            
        @endauth
    </div>
@endif


