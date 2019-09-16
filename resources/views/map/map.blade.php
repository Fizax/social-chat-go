
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

                var marker;
                var map;
                function initMap() {
                    // voeg hier de center van de map toe
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 51.598897799999996, lng: 4.7735023},
                        zoom: 8
                    });

                    console.log('test');
                    var url = '/api/post';
                    var data = { 'lat' : 8, 'lng' : 3};
                    //var data = 'test';

                    fetch(url, {
                        method: 'POST', // or 'PUT'
                        body: JSON.stringify(data), // data can be `string` or {object}!
                        headers: {
                            'Content-Type': 'application/json',
                        }
                    }).then(res => res.json())
                        .then(response => console.log('Success:', JSON.stringify(response)))
                        .catch(error => console.error('Error:', error));

                    setInterval( () => {
                         
                        fetch("/api")
                            .then( data => data.json())
                            .then( (data) => {
                                // voor iedere item uit data
                                // een nieuwe marker hier
                                data.forEach( (coords) => {
                                    // voeg hier je markers toe die je wilt.
                                    if (coords.lat && coords.lon) {
                                        var marker = new google.maps.Marker({
                                            position: {lat: parseFloat(coords.lat), lng: parseFloat(coords.lon)},
                                            map: map,
                                            title: coords.name
                                        });
                                    }

                                } )
                            })
                    }, 1000 )


                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUF2YHjV8Z0quTDM5Gho29AHVnwsilPNs&callback=initMap"
                    async defer></script>


            <script>
                $(document).ready(function() {
                    <!--#my-form grabs the form id-->
                    $("#form").submit(function(e) {
                        e.preventDefault();
                        $.ajax( {
                            <!--insert.php calls the PHP file-->
                            url: "mapController.php",
                            method: "post",
                            data: $("form").serialize(),
                            dataType: "text",
                            success: function(strMessage) {
                                $("#message").text(strMessage);
                                $("#my-form")[0].reset();
                            }
                        });
                    });
                });
            </script>

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


