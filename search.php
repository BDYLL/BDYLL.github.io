<?php
    //Toma valores que pasarón por el Ajax en Index, fueron introducidos en los campos por el usuario.
    $name = $_POST['nameData'];
    $region = $_POST['regionData'];
    $apiKey = 'RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3';

    //inicializa el que tomará los valores del API.
    $ch = curl_init();
    $ch = curl_init('https://na.api.pvp.net/api/lol/'.$region.'/v1.4/summoner/by-name/'.$name.'?api_key='.$apiKey);

    //curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //Aqui se guarda el valor que el recibe.
    $stringResult = curl_exec($ch);

	//regresa los valores tomados del API en formato TEXTO al index.
	echo $stringResult;
?>