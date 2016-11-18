<?php
    $id = $_POST['idPost'];
    $region = $_POST['regionData'];
    $apiKey = 'RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3';

    //inicializa el que tomará los valores del API.
    $ch = curl_init();
    //$ch = curl_init('https://na.api.pvp.net/api/lol/'.$region.'/v1.3/game/by-summoner/'.$id.'/recent');

    $ch = curl_init('https://lan.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/'.$region.'/'.$id.'?api_key='.$apiKey);

    //$ch=curl_init('https://lan.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/LA1/423742?api_key=RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3');


    //$ch=curl_init('https://lan.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/LA1/287572?api_key=RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3');

    //https://lan.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/LA1/851642?api_key=RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3

    //curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Aqui se guarda el valor que el recibe.
    $stringResult = curl_exec($ch);
                   
    echo $stringResult;
?>