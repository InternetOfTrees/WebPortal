<!-- CREATED BY OUMEIMA EL ISBIHANI -->

<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var position1 = {lat:-23.5613982241, lng:-46.73078913};
	var position2 = {lat:-23.77, lng:-46.75};

	var infowindow = new google.maps.InfoWindow();
	var infowindow1 = new google.maps.InfoWindow();

        var map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 15,
          	center:new google.maps.LatLng(-23.5613982241,-46.73078913),
        });
        var marker1 = new google.maps.Marker({
          	position: position1,
          	map: map
        });
	var marker2 = new google.maps.Marker({
          	position: position2,
          	map: map
        });
	google.maps.event.addListener(marker1, 'click', function() {
		infowindow.setContent('Sensor 1');
		infowindow.open(map, this);
	});
	google.maps.event.addListener(marker2, 'click', function() {
		infowindow1.setContent('Sensor 2');
		infowindow1.open(map.this);
	});
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQbhN2jaxyPIKefC-8u6PEpvHcPkC2Uis&callback=initMap">
    </script>
  </body>
</html>
