<!DOCTYPE html>
<html>
<head>
	<title>Lugar Dinamico</title>
</head>
<body>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsTfnLRmo3HOQqSuSXF59ruwqS9-Xe_0M"></script>
	<article>
	    	<div id="mapa" style="height:700px;"></div>
		<script>
				
				google.maps.event.addDomListener(window, 'load', carrega_mapa);
				var lugares = <?php echo json_encode($retorno, JSON_UNESCAPED_UNICODE);?>;
				function carrega_mapa()	
				{
					var mapa =new google.maps.Map(document.getElementById('mapa'),{
					zoom:17,					
					center:{lat:-22.495908,lng:-48.562108}
					});
					mostrar_pontos(mapa);
				}
				function mostrar_pontos(mapa)
				{
					for(var x=0; x<lugares.length;x++)
					{
						var marca = new google.maps.Marker({
							position: {lat: parseFloat(lugares[x].latitude), 
							lng: parseFloat(lugares[x].longitude)},
							map: mapa,
							title: lugares[x].nome,
						});		
					}//for
				}//function
		</script>
	</article>
</body>
</html>