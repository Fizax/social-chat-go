
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

            <form id="form" action="{{ route('map.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="latitude">Vul hier de latitude in</label>
                    <input class="input" type="text" name="latitude" id="latitude" required>
                </div>

                <div class="form-group">
                    <label for="longitude">Vul hier de longitude in</label>
                    <input class="input" type="text" name="longitude" id="longitude" required>
                </div>
                <div class="form-group">
                    <input class="button" type="submit" value="Locatie opslaan">
                </div>
            </form>
            <script>
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showLocation);
                    }

                    function showLocation(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                        document.getElementById('latitude').value = latitude;
                        document.getElementById('longitude').value = longitude;
                    };

                    window.onload=function(){
                        var auto = setTimeout(function(){ autoRefresh(); }, 100);

                        function submitform(){
                            document.forms["form"].submit();
                        }

                        function autoRefresh(){
                            clearTimeout(auto);
                            auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
                        }
                    }
                        </script>
            </body>
            </html>
            @else
            <a href="{{ route('login') }}">Login</a>
            
        @endauth
    </div>
@endif


