<?php  
	//$curl = file_get_contents("http://apiadvisor.climatempo.com.br/api/v1/locale/city/3866?token=759a8a497297d938d509e15c8513fb8a");
	$curl = file_get_contents("http://apiadvisor.climatempo.com.br/api/v1/weather/locale/3866/current?token=759a8a497297d938d509e15c8513fb8a");

	echo '<pre>';
	$c = json_decode($curl);
	var_dump($c);
	var_dump($c->data->temperature);
?>