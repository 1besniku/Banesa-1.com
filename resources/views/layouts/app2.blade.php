<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulli')|Banesat</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7135c7649e.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 200px; /* The height is 400 pixels */
            width: 100%;

        }
        #id1{
            height: 50px; /* The height is 400 pixels */
            width: 20%;
        }
        #id2{
            height: 50px; /* The height is 400 pixels */
            width: 20%;
        }
    </style>
</head>
<body>


<div id="map"></div>
<input id="id1" type="text">
<input id="id2" type="text">


<script>


    function initMap() {
        {
            var uluru = {lat: 42.6629, lng: 21.1655};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: uluru,
                disableDefaultUI: true
            });
            map.addListener('click', function (e) {
                placeMarkerAndPanTo(e.latLng, map);
            });
        }

        function placeMarkerAndPanTo(latLng, map) {

            var marker = new google.maps.Marker({
                position: latLng,
                map: map,

            });
            var lat = latLng.lat().toFixed(6);
            var lng = latLng.lng().toFixed(6);
            getCords(lat,lng)

        }
        function getCords(lat,lng) {

            // Reference input html element with id=”lat”.
            var coords_lat = document.getElementById('id1');

            // Update latitude text box.
            coords_lat.value = lat;

            // Reference input html element with id=”lng”.
            var coords_lng = document.getElementById('id2');

            // Update longitude text box.
            coords_lng.value = lng;
        }

    }

</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdUaSDlzKuCgMb6mRNXUw1Vzx7Q4kFR6Y&callback=initMap">
</script>

</body>
</html>
