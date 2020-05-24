<?php
	require_once "visao/cabec.php";
?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsTfnLRmo3HOQqSuSXF59ruwqS9-Xe_0M"></script>
	<article>
	    	<div id="mapa" style="height:300px;"></div>
		<script>
				
				google.maps.event.addDomListener(window, 'load', carrega_mapa);
				var marca = null;
				function carrega_mapa() {
				  var geocoder = new google.maps.Geocoder;
				  var escola = { lat: -22.330953, lng: -49.070956 };
				  var mapa = new google.maps.Map(document.getElementById('mapa'), {
				  zoom: 17,
				  center: escola
				  });
				  google.maps.event.addListener(mapa, "click" , 
				  function(event){
					var latlong = event.latLng;
					latlong = latlong.toString();
					var tam = latlong.length - 1;
					latlong = latlong.substring(1, tam);
					latlong = latlong.split(",");
					document.getElementById("lat").value = latlong[0];
					document.getElementById("lon").value = latlong[1];
					//pegar endereço
var latlng = {lat:parseFloat(latlong[0]), 
					lng:parseFloat(latlong[1])};
					geocoder.geocode({"location":latlng},
					function(result, status){
					
						alert(result[0].formatted_address);
						var end = result[0].formatted_address.toString();
						end = end.split(",");
						document.getElementById("cidade").value = end[2];
					
					});
					if(marca!=null)
					{
						marca.setMap(null);
					}
					adicionaMarca(event.latLng, mapa);
				 });
				}//carrega_mapa  
						
			function adicionaMarca(local, mapa) {
			  
				marca = new google.maps.Marker({
				position: local,
				map: mapa
			  });
			}
				
		</script>
	<form method="POST" action="#" >
	  <table id = "todoform">
	  <thead>
        <tr>
		  <th colspan="2">Cadastro de Alunos</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
	   	<td><input type="hidden" name="id" /></td></tr>
	   <tr>
		 <td><label>Nome:</label></td>
		 <td><input type="text" name="nome"  /></td></tr>
	   
	   <tr>
		 
		<td><label>CPF:<label></td>
		
		  <td><input type="text" name="cpf" size="10"  /></td></tr>			 
	   <tr>
		 <td><label>e-Mail:</label></td>
		 <td><input type="text" name="email" size="10"  /></td></tr>			 
		
		<tr>
		 <td><label>Celular:</label></td>
		 <td><input type="text" name="celular" size="10" /></td></tr>		
		<tr>
		 <td><label>Logradouro:</label></td>
		 <td><input type="text" id = "logr" name="logradouro" size="10" /></td></tr>			 		 
		 <tr>
		 <td><label>Número:</label></td>
		 <td><input type="text" id = "num" name="numero" size="10" /></td></tr>		
		<tr>
		 <td><label>Bairro:</label></td>
		 <td><input type="text" id = "bairro" name="bairro" size="10" /></td></tr>			 		 
		 <tr>
		 <td><label>Cidade:</label></td>
		 <td><input type="text" id = "cidade" name="cidade" size="10" /></td></tr>			 
		 <tr>
		 <td><label>Latitude:</label></td>
		 <td><input type="text"  id = "lat" name="latitude" size="10" /></td></tr>			 
		<tr>
		 <td><label>Longitude:</label></td>
		 <td><input type="text" id = "lon" name="longitude" size="10" /></td></tr>			 
		<tr></tr> 
		<tr></tr> 
	   </tbody>
	   <tfoot align = "center">
	   <tr>
		  <td colspan = "2">
			<input type="submit" name="salvar" value="Salvar" class="botao"/> 
		  
         </td></tr>
		  
	   </tfoot>
	   </table>
	</form>
  </article>
</body>
</html>