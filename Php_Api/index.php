<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Markers</title>
    <style>

        #map {
            height: 600px;
        }

        html, body {
            height: 500px;

        }
    </style>
</head>
<body>
<h1>Welkom bij de test google api van Weiyi Jin</h1>
<div id="map"></div>
<script>

    function initMap() {
        var myLatLng = {lat: 52.379189, lng:4.899431};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Mijn locatie'
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCEbCMl8vn1a6BbBdMZ39u5YAa1LyCfR0&callback=initMap">
</script>
</body>
</html>