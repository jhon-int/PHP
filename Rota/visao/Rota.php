<!DOCTYPE html>
<html>
  <head>
    <title>Rotas</title>
	<meta charset="utf-8">
    <style>
      html, body, #mapa {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #painel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }
	 #mapa {
        margin-right: 400px;
		
      }
	</style>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCsTfnLRmo3HOQqSuSXF59ruwqS9-Xe_0M"></script>
    <script>
		var directionsDisplay;
		var directionsService = new google.maps.DirectionsService();

		function iniciar() {
		  directionsDisplay = new google.maps.DirectionsRenderer();
		  var mapOptions = {
		    zoom: 15,
		    center: new google.maps.LatLng(-22.330953, -49.070956)
		  };
		  var map = new google.maps.Map(document.getElementById('mapa'),
		      mapOptions);
		  directionsDisplay.setMap(map);
		  directionsDisplay.setPanel(document.getElementById('painel'));

		  google.maps.event.addListener(map, "click" , 
		  function(event){
			var latlong = event.latLng;
			latlong = latlong.toString();
			var tam = latlong.length - 1;
			latlong = latlong.substring(1, tam);
			latlong = latlong.split(",");
			Rota(latlong);
		  });
		}

		function Rota(latlong) {
		  var origem = new google.maps.LatLng(-22.330953, -49.070956);
		  var modo = document.getElementById('modo').value;
		  var destino = new google.maps.LatLng(parseFloat(latlong[0]), parseFloat(latlong[1]));
		  var request = {
		    origin: origem,
		    destination: destino,
			travelMode: google.maps.TravelMode[modo]
		  };
		  directionsService.route(request, function(response, status) {
		    if (status == google.maps.DirectionsStatus.OK) {
		      directionsDisplay.setDirections(response);
		    }
		  });
		}

		google.maps.event.addDomListener(window, 'load', iniciar);

    </script>
  </head>
  <body>
	<label>Locomoção</label>
	<select id="modo" onchange="Rota()">
		<option value="DRIVING">Driving</option>
		<option value="WALKING">Walking</option>
		<option value="BICYCLING">Bicycling</option>
	</select>
    <div id="painel"></div>
    <div id="mapa"></div>
  </body>
</html>